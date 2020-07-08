<?php
include_once "./views/header.view.php";
?>
    <h1>Insert new post</h1>
    <form action="submit_form.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <?php while($row = mysqli_fetch_assoc($result_categories)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>


        <div class="form-group">
            <label for="user_id">Author</label>
            <select name="user_id" id="user_id" class="form-control">

                <?php while($row = mysqli_fetch_assoc($result_users)): ?>
                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                <?php endwhile; ?>

            </select>
        </div>

        <div class="form-group">
            <?php while($row = mysqli_fetch_assoc($result_tags)): ?>
                <div>
                    <label for="tags"><?= $row['title']?></label>
                    <input type="checkbox" class="" name="tags[]" value="<?= $row['id']?>">
                </div>
            <?php endwhile; ?>
        </div>

        <button type="submit" class="btn btn-primary">Create post</button>
        <button type="reset" class="btn btn-warning">Reset</button>

    </form>
<?php
include_once "./views/footer.view.php";
?>