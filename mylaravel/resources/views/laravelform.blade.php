<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<div class="container mt-5">
    <div class="mb-3">
        <h1>ตารางสูตรคูณแม่ : <?php echo $myinput; ?></h1>
        <div class="container mt-5">
        <form method="post" action="{{ url('/Laravel-form') }}">
            @csrf
            <input type="text" name="myinput" placeholder="Enter Number" required pattern="\d+(\.\d+)?"title="กรุณาป้อนตัวเลขเท่านั้น">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            <?php for ($i=1; $i <= 12; $i++) {?>
            <?php $answer = $myinput * $i; ?>
            <div><?php echo "$myinput x $i  = $answer"; ?></div>
            <?php }?>
        </div>
    </div>
</div>
