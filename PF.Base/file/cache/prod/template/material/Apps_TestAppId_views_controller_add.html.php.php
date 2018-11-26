<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: November 24, 2018, 4:20 am */ ?>

<form method="post">
    <div class="form-group">
        <label class="control-label">Name</label>
        <input type="text" name="val[name]" class="form-control"
               maxlength="255"/>
    </div>
    <div class="form-group">
        <label class="control-label">Description</label>
        <textarea name="val[description]" rows="3"
                  class="form-control"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="_submit">Submit</button>
    </div>

</form>

