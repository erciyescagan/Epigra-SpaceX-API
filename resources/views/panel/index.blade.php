@include('panel.header')
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Çekiliş Yap</h2>
    </div>
</header>
<!-- Dashboard Header Section    -->
<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Çekiliş Yap</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning"><b>Çekiliş Kredisi: 100</b></div>
                        <div class="alert alert-danger">100 adet yorum üzeri çekiliş yapmak için lütfen premium üyelik satın alın!</div>
                        <form id="form" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-muted">Instagram Gönderi Linki</label>
                                        <input type="url" class="form-control" id="link" name="link" placeholder="https://www.instagram.com/p/CEuReyiA-JG/  || Linkleriniz bu şekilde olmalıdır!!!" required/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-muted">Çekiliş Adı</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Çekiliş Adı" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="text-muted">Kaç Kişi Kazansın?</label>
                                        <input type="number" class="form-control" id="extra_1" name="extra_1" value="1" min="1" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="text-muted">Kaç Yedek Olsun?</label>
                                        <input type="number" class="form-control" id="extra_2" name="extra_2" value="0" required/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="extra_7">
                                            <label class="custom-control-label" for="extra_7">Her Kullanıcıyı 1 Kez Say</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="user_hashtag_check">
                                            <label class="custom-control-label" for="user_hashtag_check">Hashtag Kontrolü Yapılsın mı?</label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="user_hashtag_count_div" style="display:none;">
                                        <label class="text-muted">Min. Hashtag(#) Adedi?</label>
                                        <select name="user_hashtag_count" class="form-control" id="user_hashtag_count">
                                            <?php for($i=1; $i<=10; $i++){ ?>
                                            <option value="<?=$i;?>"><?=$i;?></option>
                                            <option value="<?=$i;?>"><?=$i;?></option>
                                            <option value="<?=$i;?>"><?=$i;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="user_tag_check">
                                            <label class="custom-control-label" for="user_tag_check">Etiket Kontrolü Yapılsın mı?</label>
                                        </div>
                                    </div>
                                    <div class="form-group" id="user_tag_count_div" style="display:none;">
                                        <label class="text-muted">Min. Etiket(@) Adedi?</label>
                                        <select name="user_tag_count" class="form-control" id="user_tag_count">
                                            <?php for($i=1; $i<=5; $i++){ ?>
                                            <option value="<?=$i;?>"><?=$i;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <a class="btn btn-success btn-block btn-lg text-white" onclick="start()" id="start">Çekilişi Başlat</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="countdown" style="display:none;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="container text-center">
                                <h3>Çekilen Yorum: <b><p><div id='count-one'>0</div>/<div id='count-two'>0</div></p></b></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="counts" style="display:none;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="container text-center">
                                <h3><div id="nameli"></div></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="winner" style="display:none;">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="container text-center">
                                <h3 id="draw_code"></h3>
                                <div class="row d-flex justify-content-center" id="winners"></div>
                                <div class="row d-flex justify-content-center" id="winners_2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@include('panel.footer')
