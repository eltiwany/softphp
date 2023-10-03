<?php
    require_once 'app/Providers/SessionServiceProvider.php';
    use App\Providers\SessionServiceProvider;

    $users = SessionServiceProvider::getViewData()['users'];

    $layoutPath = 'views/layouts/app.php';
    if (defined($layoutPath)) {
?>

<h1 class="text-center">
    <?php echo SessionServiceProvider::getViewData()['heading'] ?>
</h1>

<div style="height: 500px; overflow: auto; width: 100%" class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>SN</th>
            <th>Email</th>
        </tr>
        <?php foreach($users as $user) { ?>
    
            <tr>
                <td><?= $user[0] ?></td>
                <td><?= $user[1] ?></td>
            </tr>
    
        <?php } ?>
    </table>
</div>

<?php
    } else {
        define($layoutPath, true); 
    }

    $contentFile = 'views/users/view-users.php'; 
    include_once $layoutPath;
?>