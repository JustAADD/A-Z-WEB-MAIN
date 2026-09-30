<?php
require('C:\xampp\htdocs\az-web-main\db-con\db.php');

// =========================
// SEARCH
// =========================
$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// =========================
// ENTRIES PER PAGE
// =========================
$allowed_entries = [10, 25, 50, 100];

$entries = isset($_GET['entries']) ? (int)$_GET['entries'] : 10;

if (!in_array($entries, $allowed_entries)) {
    $entries = 10;
}

// =========================
// CURRENT PAGE
// =========================
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($page < 1) {
    $page = 1;
}

// =========================
// SEARCH CONDITION
// =========================
$where = "";
$params = [];
$types = "";

if ($search !== '') {

    $where = "WHERE 
        product_id LIKE ?
        OR product_name LIKE ?
        OR name LIKE ?
        OR address LIKE ?
        OR comments LIKE ?";

    $searchTerm = "%{$search}%";

    $params = [
        $searchTerm,
        $searchTerm,
        $searchTerm,
        $searchTerm,
        $searchTerm
    ];

    $types = "sssss";
}

// =========================
// COUNT TOTAL RECORDS
// =========================
$countSql = "SELECT COUNT(*) AS total FROM cus_orders $where";

$countStmt = mysqli_prepare($con, $countSql);

if (!empty($params)) {
    mysqli_stmt_bind_param($countStmt, $types, ...$params);
}

mysqli_stmt_execute($countStmt);

$countResult = mysqli_stmt_get_result($countStmt);
$totalRow = mysqli_fetch_assoc($countResult);

$totalRecords = (int)$totalRow['total'];

$totalPages = max(1, ceil($totalRecords / $entries));

if ($page > $totalPages) {
    $page = $totalPages;
}

// =========================
// OFFSET
// =========================
$offset = ($page - 1) * $entries;

// =========================
// GET ORDERS
// =========================
$sql = "SELECT 
            product_id,
            product_name,
            price,
            name,
            email,
            phone,
            address,
            quantity,
            comments,
            qr_upload
        FROM cus_orders
        $where
        ORDER BY product_id DESC
        LIMIT ? OFFSET ?";

$stmt = mysqli_prepare($con, $sql);

if (!empty($params)) {

    $newTypes = $types . "ii";
    $newParams = array_merge($params, [$entries, $offset]);

    mysqli_stmt_bind_param(
        $stmt,
        $newTypes,
        ...$newParams
    );
} else {

    mysqli_stmt_bind_param(
        $stmt,
        "ii",
        $entries,
        $offset
    );
}

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
?>


<!-- =========================
     SEARCH + ENTRIES CONTROLS
========================= -->

<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mt-4 mb-4">

    <!-- Entries -->
    <div class="flex items-center gap-2">

        <label for="entries" class="text-sm text-gray-600">
            Show
        </label>

        <select id="entries" name="entries" onchange="changeEntries()"
            class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">

            <option value="10" <?= $entries == 10 ? 'selected' : '' ?>>
                10
            </option>

            <option value="25" <?= $entries == 25 ? 'selected' : '' ?>>
                25
            </option>

            <option value="50" <?= $entries == 50 ? 'selected' : '' ?>>
                50
            </option>

            <option value="100" <?= $entries == 100 ? 'selected' : '' ?>>
                100
            </option>

        </select>

        <span class="text-sm text-gray-600">
            entries
        </span>

    </div>


    <!-- Search -->
    <form method="GET" class="flex items-center gap-2">

        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Search orders..."
            class="border border-gray-300 rounded-lg px-4 py-2 text-sm w-64 focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <input type="hidden" name="entries" value="<?= $entries ?>">

        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm">

            Search

        </button>

        <?php if ($search !== ''): ?>

            <a href="?entries=<?= $entries ?>"
                class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm">

                Clear

            </a>

        <?php endif; ?>

    </form>

</div>


<!-- =========================
     TABLE
========================= -->

<div class="overflow-x-auto">

    <table class="border-collapse border mt-4 rounded-lg w-full">

        <thead class="bg-gray-700">

            <tr>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    ID
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Customer Name
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Product
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Price
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Quantity
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Address
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Comments
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Payment
                </th>

                <th
                    class="border border-gray-300 px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    Action
                </th>

            </tr>

        </thead>


        <tbody>

            <?php if (mysqli_num_rows($result) > 0): ?>

                <?php while ($order = mysqli_fetch_assoc($result)): ?>

                    <tr>

                        <!-- ID -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['product_id']) ?>
                        </td>


                        <!-- Customer -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['name']) ?>
                        </td>


                        <!-- Product -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['product_name']) ?>
                        </td>


                        <!-- Price -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['price']) ?>
                        </td>


                        <!-- Quantity -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['quantity']) ?>
                        </td>


                        <!-- Address -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm">
                            <?= nl2br(htmlspecialchars($order['address'])) ?>
                        </td>


                        <!-- Comments -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">
                            <?= htmlspecialchars($order['comments']) ?>
                        </td>


                        <!-- Payment -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">

                            <?php if (!empty($order['qr_upload'])): ?>

                                <button type="button"
                                    onclick="openQrModal('../<?= htmlspecialchars($order['qr_upload'], ENT_QUOTES) ?>')"
                                    class="text-indigo-600 hover:text-indigo-900">

                                    View QR

                                </button>

                            <?php else: ?>

                                <span class="text-gray-400 text-sm">
                                    No QR
                                </span>

                            <?php endif; ?>

                        </td>


                        <!-- Action -->
                        <td class="border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap">

                            <!-- Delete -->
                            <form action="delete_order.php" method="POST" class="inline"
                                onsubmit="return confirm('Order Completed?');">

                                <input type="hidden" name="product_id" value="<?= htmlspecialchars($order['product_id']) ?>">

                                <button type="submit"
                                    class="text-red-600 hover:text-red-900 bg-transparent border-0 p-0 cursor-pointer">

                                    Delete

                                </button>

                            </form>


                            <!-- Dispatch -->
                            <button type="button" onclick="openDispatchModal(<?= (int)$order['product_id'] ?>)"
                                class="text-red-600 hover:text-red-900 bg-transparent border-0 p-0 cursor-pointer ml-4">

                                Dispatch

                            </button>

                        </td>

                    </tr>

                <?php endwhile; ?>

            <?php else: ?>

                <tr>

                    <td colspan="9" class="text-center py-6 text-gray-500">

                        No orders found.

                    </td>

                </tr>

            <?php endif; ?>

        </tbody>

    </table>

</div>


<!-- =========================
     PAGINATION INFO
========================= -->

<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mt-4">

    <div class="text-sm text-gray-600">

        <?php

        $start = $totalRecords > 0
            ? $offset + 1
            : 0;

        $end = min(
            $offset + $entries,
            $totalRecords
        );

        ?>

        Showing
        <span class="font-medium"><?= $start ?></span>
        to
        <span class="font-medium"><?= $end ?></span>
        of
        <span class="font-medium"><?= $totalRecords ?></span>
        entries

        <?php if ($search !== ''): ?>

            <span>
                for "<strong><?= htmlspecialchars($search) ?></strong>"
            </span>

        <?php endif; ?>

    </div>


    <!-- =========================
         PAGINATION BUTTONS
    ========================== -->

    <div class="flex items-center gap-2">

        <!-- Previous -->
        <?php if ($page > 1): ?>

            <a href="?page=<?= $page - 1 ?>&entries=<?= $entries ?>&search=<?= urlencode($search) ?>"
                class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-100">

                Previous

            </a>

        <?php else: ?>

            <span class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-400 cursor-not-allowed">

                Previous

            </span>

        <?php endif; ?>


        <!-- Page Numbers -->

        <?php

        $startPage = max(1, $page - 2);
        $endPage = min($totalPages, $page + 2);

        ?>

        <?php for ($i = $startPage; $i <= $endPage; $i++): ?>

            <?php if ($i == $page): ?>

                <span class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm">

                    <?= $i ?>

                </span>

            <?php else: ?>

                <a href="?page=<?= $i ?>&entries=<?= $entries ?>&search=<?= urlencode($search) ?>"
                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-100">

                    <?= $i ?>

                </a>

            <?php endif; ?>

        <?php endfor; ?>


        <!-- Next -->
        <?php if ($page < $totalPages): ?>

            <a href="?page=<?= $page + 1 ?>&entries=<?= $entries ?>&search=<?= urlencode($search) ?>"
                class="px-4 py-2 border border-gray-300 rounded-lg text-sm text-gray-600 hover:bg-gray-100">

                Next

            </a>

        <?php else: ?>

            <span class="px-4 py-2 border border-gray-200 rounded-lg text-sm text-gray-400 cursor-not-allowed">

                Next

            </span>

        <?php endif; ?>

    </div>

</div>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>
    function changeEntries() {

        const entries = document.getElementById('entries').value;

        const search = <?= json_encode($search) ?>;

        const params = new URLSearchParams();

        params.set('entries', entries);
        params.set('page', 1);

        if (search !== '') {
            params.set('search', search);
        }

        window.location.href = '?' + params.toString();
    }
</script>


<!-- for saving -->

<?php

require('C:\xampp\htdocs\az-web-main\db-con\db.php');

$stmt = mysqli_prepare($con, "SELECT product_id, product_name, price, name, email, phone, address, quantity, comments, qr_upload FROM complete_orders ORDER BY product_id DESC");
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);


while ($order = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['product_id']}</td>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['name']) . "</td>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['product_name']) . "</td>";
    echo "<td class='border px-4 py-3  border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['price']}</td>";
    echo "<td class='border px-4 py-3  border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>{$order['quantity']}</td>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm '>" . nl2br(htmlspecialchars($order['address'])) . "</td>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm  whitespace-nowrap'>" . htmlspecialchars($order['comments']) . "</td>";
    echo "<td class='border px-4 py-3 border-gray-300 text-gray-600 text-sm whitespace-nowrap'>";


    if (!empty($order['qr_upload'])) {
        echo "<button type='button' onclick=\"openQrModal('../" . htmlspecialchars($order['qr_upload'], ENT_QUOTES) . "')\" class='text-indigo-600 hover:text-indigo-900'>View QR</button>";
    } else {
        echo "<span class='text-gray-400 text-sm'>No QR</span>";
    }

    echo "<form action='delete_order.php' method='POST' class='inline ml-4' onsubmit=\"return confirm('Delete this order?');\">
                                <input type='hidden' name='product_id' value='{$order['product_id']}'>
                                <button type='submit' class='text-red-600 hover:text-red-900 bg-transparent border-0 p-0 cursor-pointer'>Delete</button>
                              </form>";
    echo "</td>";
    echo "</tr>";
}
?>