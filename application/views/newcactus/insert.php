<div class="container" style="padding: 150px 0;">
    <div class="columns is-multiline">
        <div class="column">
            <?php
            unset($_POST['student_number']);
            unset($_POST['student_name']);
            unset($_POST['interview_order']);
            unset($_POST['content']);
            ?>
            <?php echo validation_errors(); ?>
            <?php echo form_open('newcactus/insert'); ?>
            <label for="student_number" class="label">학번</label>
            <p class="control">
                <input type="text" class="input" name="student_number" placeholder="학번">
            </p>
            <label for="student_name" class="label">이름</label>
            <p class="control">
                <input type="text" class="input" name="student_name" placeholder="이름">
            </p>
            <label for="interview_order" class="label">면접 순서</label>
            <p class="control">
                <input type="text" class="input" name="interview_order" placeholder="면접 순서">
            </p>
        </div>
        <div class="column">
            <label for="content" class="label">내용</label>
            <p class="control">
                <textarea name="content" class="textarea"></textarea>
            </p>
        </div>
        <div class="column is-12">
            <input type="submit" class="button" value="추가">
            <a href="/index.php/newcactus/manage" class="button">목록으로</a>
        </div>
        </form>
    </div>
</div>