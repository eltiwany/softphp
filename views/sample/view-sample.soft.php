<?php
    use App\Providers\SessionServiceProvider;

    $data = SessionServiceProvider::getViewData()['data'];

    $layoutPath = 'views/layouts/app.soft.php';
    if (defined($layoutPath)) {
?>

<h1 class="text-center">
    <?php echo SessionServiceProvider::getViewData()['heading'] ?>
</h1>

<div style="height: 500px; overflow: auto; width: 100%" class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>SN</th>
            <th>Region</th>
            <th>Districts</th>
        </tr>
        <?php foreach($data as $index => $datum) { ?>
    
            <tr>
                <td><?= $index ?></td>
                <td><?= $datum['name'] ?></td>
                <td><?= implode(', ', array_column($datum['districts'], 'name')) ?></td>
            </tr>
    
        <?php } ?>
    </table>
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = __FILE__; 
    include_once $layoutPath;
?>