<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'); ?>

</head>

<body>

    <div class="container">
        <?php echo form_open('', ['name' => 'insertdata', 'autocomplete' => 'off']); ?>
        <div class="row">
            <div class="col-md-6"><b>First Name</b>
                <?php echo form_input(['name' => 'firstname', 'class' => 'form-control', 'value' => set_value('firstname')]); ?>
                <?php echo form_error('firstname', "<div style='color:red'>", "</div>"); ?>
            </div>
            <div class="col-md-6"><b>Last Name</b>
                <?php echo form_input(['name' => 'lastname', 'class' => 'form-control', 'value' => set_value('lastname')]); ?>
                <?php echo form_error('lastname', "<div style='color:red'>", "</div>"); ?>
            </div>
            <div class="col-md-4"><b>Chose File</b>
            <?php echo form_input(['type' => 'file', 'name' => 'file',  'id' => 'myfile', 'value' => set_value('file')]); ?>
            <?php echo form_error('lastname', "<div style='color:red'>", "</div>"); ?>
            </div>
        </div>
        <div class="row" style="margin-top:1%">
            <div class="col-md-8">
                <?php echo form_submit(['name' => 'insert', 'value' => 'Submit']); ?>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</body>

</html>