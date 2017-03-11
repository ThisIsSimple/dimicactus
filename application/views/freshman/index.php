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
</style>

<div id="main">
    <div class="columns">
        <div class="column is-6">
            <h1 class="title">선발자 명단 <small class="text-muted">2/10</small></h1>
            <h3 class="subtitle">선발된 친구들 명단입니다</h3>

            <div class="list-wrapper">
                <div class="columns is-multiline">
                    <div class="column is-6">
                        <div class="box">
                            <div class="content">
                                <p>
                                    <strong>전윤민</strong> <small>2327</small>
                                    <br>
                                    꼭 뽑아 주세연
                                </p>
                                <a href="" class="button is-primary">선발 취소</a>
                                <button class="button comment">코멘트 달기</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title">코멘트 달기</p>
                                <button class="delete"></button>
                            </header>
                            <section class="modal-card-body">
                                <!-- Content ... -->
                            </section>
                            <footer class="modal-card-foot">
                                <a class="button is-success">Save changes</a>
                                <a class="button">Cancel</a>
                            </footer>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="box">
                            <div class="content">
                                <p>
                                    <strong>전윤민</strong> <small>2327</small>
                                    <br>
                                    꼭 뽑아 주세연
                                </p>
                                <a href="" class="button is-primary">선발 취소</a>
                                <button class="button comment">코멘트 달기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-3">
            <h1 class="title">고려 명단</h1>
            <h3 class="subtitle">고려중에 있는 친구들입니다</h3>

            <div class="list-wrapper">
                <div class="columns is-multiline">
                    <div class="column is-12">
                        <div class="box">
                            <div class="content">
                                <p>
                                    <strong>전윤민</strong> <small>2327</small>
                                    <br>
                                    꼭 뽑아 주세연
                                </p>
                                <a href="" class="button is-primary">선발</a>
                                <a href="" class="button">코멘트 달기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column is-3">
            <h1 class="title">전체 명단</h1>
            <h3 class="subtitle">전체 명단입니다</h3>

            <div class="list-wrapper">
                <div class="columns is-multiline">
                    <div class="column is-12">
                        <div class="box">
                            <div class="content">
                                <p>
                                    <strong>전윤민</strong> <small>2327</small>
                                    <br>
                                    꼭 뽑아 주세연
                                </p>
                                <a href="" class="button is-primary">선발</a>
                                <a href="" class="button">코멘트 달기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-group has-text-right">
        <a class="button is-primary">추가하기</a>
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
    });
</script>