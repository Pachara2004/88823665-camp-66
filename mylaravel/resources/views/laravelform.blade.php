<h1>ตารางสูตรคูณ</h1>
<?php echo $value_id; ?>
{{ $value_id }}|{{ $myinput }}
<div >
    <form method="post" action="{{ url('/Laravel-form') }}">
        @csrf
        <input type="text" name="myinput">
        <button type="submit">
            submit
        </button>
    </form>
    <?php for ($i=0; $i < $myinput; $i++) {?>
    <h1>{{ $i }}</h1>

    <?php }?>
</div>
