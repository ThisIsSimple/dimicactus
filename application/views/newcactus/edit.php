<div class="container" style="padding: 150px 0;">
    <div class="columns is-multiline">
        <div class="column">
            <?php echo validation_errors(); ?>
            <?php $n = $this->uri->segment(3); ?>
            <?php echo form_open("newcactus/edit/$n"); ?>
            <label for="student_number" class="label">학번</label>
            <p class="control">
                <input type="text" class="input" name="student_number" placeholder="학번" value="<?php echo $member->student_number; ?>">
            </p>
            <label for="student_name" class="label">이름</label>
            <p class="control">
                <input type="text" class="input" name="student_name" placeholder="이름" value="<?php echo $member->student_name; ?>">
            </p>
            <label for="interview_order" class="label">면접 순서</label>
            <p class="control">
                <input type="text" class="input" name="interview_order" placeholder="면접 순서" value="<?php echo $member->interview_order; ?>">
            </p>
        </div>
        <div class="column">
            <label for="content" class="label">내용</label>
            <p class="control">
                <textarea name="content" class="textarea"><?php echo $member->content; ?></textarea>
            </p>
        </div>
        <div class="column is-12">
            <input type="submit" class="button" value="수정">
        </div>
        </form>
    </div>
</div>