<div style="height: 50px;"></div>

<style>
    #main {
        background-color; #eee;
        padding: 2em;
    }

    .list-wrapper {
        background-color: #eee;
        padding: 1em;
        border-radius: 5px;
        min-height: 100vh;
        height: 100vh;
        overflow: scroll;
    }

    p.cont {
        max-height: 100px;
        overflow: scroll;
    }
</style>

<div id="main">
    <div class="columns">
        <div class="column is-6">
            <h1 class="title">선발자 명단 <small class="text-muted"><?php echo $done_number; ?>/10</small></h1>
            <h3 class="subtitle">선발된 친구들 명단입니다</h3>

            <div class="list-wrapper">
                <div class="columns is-multiline">
                    <?php foreach($done as $d) { ?>
                    <div class="column is-6">
                        <div class="box">
                            <div class="content">
                                <p class="cont">
                                    <strong><?php echo $this->fresh->get_member($d->member_idx)->name; ?></strong> <small><?php echo $this->fresh->get_member($d->member_idx)->number; ?></small>
                                    <br>
                                    <?php echo $this->fresh->get_member($d->member_idx)->content; ?>
                                </p>
                                <a href="/index.php/freshman/done_to_list/<?php echo $d->member_idx; ?>" class="button is-primary">선발 취소</a>
                                <button class="button comment">코멘트</button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="column is-6">
            <h1 class="title">전체 명단</h1>
            <h3 class="subtitle">전체 명단입니다</h3>

            <div class="list-wrapper">
                <div class="columns is-multiline">
                    <?php foreach($list as $l) { ?>
                        <div class="column is-6">
                            <div class="box">
                                <div class="content">
                                    <p class="cont">
                                        <strong><?php echo $this->fresh->get_member($l->member_idx)->name; ?></strong> <small><?php echo $this->fresh->get_member($l->member_idx)->number; ?></small>
                                        <br>
                                        <?php echo $this->fresh->get_member($l->member_idx)->content; ?>
                                    </p>
                                    <a href="/index.php/freshman/list_to_done/<?php echo $l->member_idx; ?>" class="button is-primary">선발</a>
                                    <a href="" class="button">코멘트</a>
                                    <a href="/index.php/freshman/edit/<?php echo $l->member_idx; ?>" class="button">수정</a>
                                    <a href="/index.php/freshman/delete/<?php echo $l->member_idx; ?>" class="button is-danger">삭제</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="button-group has-text-right">
        <a class="button is-primary" href="/index.php/freshman/insert">추가하기</a>
    </div>
    <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete"></button>
            </header>
            <section class="modal-card-body">
            </section>
            <footer class="modal-card-foot">
                    <a class="button cancel">닫기</a>
            </footer>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.comment').click(function() {
            $('.modal').addClass('is-active');
        });
        $('.delete').click(function() {
            $('.modal').removeClass('is-active');
        });
        $('.cancel').click(function() {
            $('.modal').removeClass('is-active');
        });
    });

    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {
            $('.modal').removeClass('is-active');
        }
    });
</script>