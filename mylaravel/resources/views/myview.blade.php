<h1>My View</h1>
<?php echo $value_id; ?>
{{  $value_id; }}|{{ $myinput }}

<form method="post" action="{{ url('/mycontroller') }}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">
        submit
    </button>
</form>
<?php for ($i=0; $i < $myinput; $i++) {?>
    <h1>{{ $i }}</h1>

<?php }?>
