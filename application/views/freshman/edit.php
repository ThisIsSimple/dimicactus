<div style="height: 50px;"></div>

<div class="container" style="padding: 150px 0;">
    <div class="columns is-multiline">
        <div class="column">
            <?php
            unset($_POST['number']);
            unset($_POST['name']);
            unset($_POST['content']);
            ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open("freshman/edit/$member->idx"); ?>
            <label for="number" class="label">학번</label>
            <p class="control">
                <input type="text" class="input" name="number" placeholder="학번" value="<?php echo $member->number; ?>">
            </p>
            <label for="name" class="label">이름</label>
            <p class="control">
                <input type="text" class="input" name="name" placeholder="이름" value="<?php echo $member->name; ?>">
            </p>
        </div>
        <div class="column">
            <label for="content" class="label">내용</label>
            <p class="control">
                <textarea name="content" class="textarea"><?php echo $member->content; ?></textarea>
            </p>
        </div>
        <div class="column is-12">
            <input type="submit" class="button is-primary" value="수정하기">
        </div>
        </form>
    </div>
</div>