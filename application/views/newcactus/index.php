<div style="height: 50px;"></div>
<div class="hero is-medium">
    <div class="hero-body">
        <div class="container">
            <?php if(empty($member)) { ?>
            <?php echo form_open('newcactus'); ?>
            <div class="columns is-multiline">
                <div class="column is-4-desktop is-offset-4-desktop is-6-tablet is-offset-3-tablet">
                    <?php echo validation_errors(); ?>
                    <label class="label" for="name">이름</label>
                    <p class="control">
                        <input class="input" type="text" placeholder="이름" name="name" value="<?php if(!empty($_POST['name'])) echo $_POST['name']; ?>">
                    </p>
                </div>
                <div class="column is-4-desktop is-offset-4-desktop is-6-tablet is-offset-3-tablet">
                    <label class="label" for="student_number">학번</label>
                    <p class="control">
                        <input class="input" type="text" placeholder="학번" name="student_number" value="<?php if(!empty($_POST['student_number'])) echo $_POST['student_number']; ?>">
                    </p>
                </div>
                <div class="column is-12">
                    <p class="has-text-centered">
                        <input class="button is-primary" type="submit" value="조회하기">
                    </p>
                </div>
            </div>
            </form>
            <?php } else { ?>
                <div class="columns">
                    <div class="column is-4-desktop is-offset-4-desktop is-6-tablet is-offset-3-tablet">
                        <div class="card has-text-centered">
                            <div class="card-content">
                                <h1 class="title is-bold"><?php echo $member->student_name; ?></h1>
                                <h3 class="subtitle"><?php echo $member->student_number; ?></h3>
                                <p class="has-text-left">
                                    나의 대기 번호 : <?php echo $member->interview_order; ?><br>
                                    면접 진행 중인 번호 : <?php foreach($ongoing as $o) { echo $o->student_idx; } ?>
                                </p>
                                <?php if($time_left === 'done') { ?>
                                    <p class="is-bold">면접을 완료하셨습니다. 수고하셨습니다!</p>
                                <?php } else if($time_left === 'ongoing') { ?>
                                    <p class="is-bold">면접을 진행하는 중입니다.</p>
                                <?php } else { ?>
                                    <p class="is-bold">약 <?php echo $time_left; ?>분</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>