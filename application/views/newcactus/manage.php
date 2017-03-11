<div class="container" style="padding: 150px 0;">
    <?php if(!$this->session->logged_in) { ?>
    <div class="columns">
        <div class="column is-4-desktop is-offset-4-desktop is-6-tablet is-offset-3-tablet has-text-centered">
            <?php echo form_open('newcactus/manage'); ?>
            <p class="control">
                <label for="id" class="label">아이디</label>
                <input type="text" name="id" class="input" placeholder="아이디">
            </p>
            <p class="control">
                <label for="password" class="label">비밀번호</label>
                <input type="password" name="password" class="input" placeholder="비밀번호">
            </p>
            <input type="submit" class="button is-primary" value="로그인">
            </form>
        </div>
    </div>
    <?php } else { $i = 1; ?>
        <a class="button is-info" href="?order=name">이름순 정렬</a>
        <a class="button is-info" href="?order=number">학번순 정렬</a>
        <a class="button is-info" href="?order=interview">면접순 정렬</a>
        <div style="height: 20px;"></div>

        <h1 class="title">진행중</h1>
        <h3 class="subtitle">면접 진행중인 인원입니다.</h3>
        <table class="table">
            <thead>
            <tr>
                <th>번호</th>
                <th>이름</th>
                <th>학번</th>
                <th>면접 순서</th>
                <th>내용</th>
                <th>액션</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ongoing as $m) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $m->student_name; ?></td>
                    <td><?php echo $m->student_number; ?></td>
                    <td><?php echo $m->interview_order; ?></td>
                    <td><?php echo $m->content; ?></td>
                    <td><a class="button" href="/index.php/newcacatus/complete/<?php echo $m->student_number; ?>">완료</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>


        <h1 class="title">대기중</h1>
        <h3 class="subtitle">대기중인 인원입니다.</h3>
        <table class="table">
            <thead>
            <tr>
                <th>번호</th>
                <th>이름</th>
                <th>학번</th>
                <th>면접 순서</th>
                <th>내용</th>
                <th>액션</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($member as $m) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $m->student_name; ?></td>
                    <td><?php echo $m->student_number; ?></td>
                    <td><?php echo $m->interview_order; ?></td>
                    <td><?php echo $m->content; ?></td>
                    <td><a class="button is-success" href="/index.php/newcactus/complete/<?php echo $m->student_number; ?>">완료</a><a class="button is-warning" href="/index.php/newcactus/ongoing/<?php echo $m->student_number; ?>">진행</a><a class="button" href="/index.php/newcactus/edit/<?php echo $m->student_number; ?>">수정</a><a class="button is-danger" href="/index.php/newcactus/delete/<?php echo $m->student_number; ?>">삭제</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <h1 class="title">완료</h1>
        <h3 class="subtitle">완료된 인원입니다.</h3>
        <table class="table">
            <thead>
            <tr>
                <th>번호</th>
                <th>이름</th>
                <th>학번</th>
                <th>면접 순서</th>
                <th>내용</th>
                <th>액션</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($done as $m) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $m->student_name; ?></td>
                    <td><?php echo $m->student_number; ?></td>
                    <td><?php echo $m->interview_order; ?></td>
                    <td><?php echo $m->content; ?></td>
                    <td><a class="button is-success" href="/index.php/newcactus/cancel/<?php echo $m->student_number; ?>">취소</a><a class="button">수정</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } ?>
    <a href="/index.php/newcactus/insert" class="button">추가</a>
</div>
