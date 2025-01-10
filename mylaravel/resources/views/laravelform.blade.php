<div class="container mt-5">
    <h1>ตารางสูตรคูณ</h1>
    <?php echo $value_id; ?>
    {{ $value_id }}|{{ $myinput }}
    <form method="post" action="{{ url('/Laravel-form') }}">
        @csrf
        <input type="text" name="myinput">
        <button type="submit">
            submit
        </button>
    </form>
    <?php for ($i=1; $i <= 12; $i++) {?>
        <?php $answer = $myinput*$i;?>
        <div><?php echo "$myinput x $i  = $answer";?></div>

    <?php }?>
</div>
