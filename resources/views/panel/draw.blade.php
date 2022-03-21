@include('panel.header')
<div class="jumbotron text-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Çekiliş Kodu</th>
                            <th scope="col">Kullanıcı Adı</th>
                            <th scope="col">Çekiliş Adı</th>
                            <th scope="col">Çekiliş Linki</th>
                            <th scope="col">Çekiliş Tarihi</th>
                            <th scope="col">Kazananlar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">CKLS-1</th>
                            <th scope="row">erciyescagan</th>
                            <td>Çekiliş 1</td>
                            <td><a href="http://localhost:8000/ckls-1" target="_blank">ckls-1</a></td>
                            <td>{{today()}}</td>
                            <td><a href="/get-draw/ckls-1" target="_blank" class="btn btn-success btn-sm">Kazananlar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">CKLS-1</th>
                            <th scope="row">erciyescagan</th>
                            <td>Çekiliş 1</td>
                            <td><a href="http://localhost:8000/ckls-1" target="_blank">ckls-1</a></td>
                            <td>{{today()}}</td>
                            <td><a href="/get-draw/ckls-1" target="_blank" class="btn btn-success btn-sm">Kazananlar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">CKLS-2</th>
                            <th scope="row">erciyescagan</th>
                            <td>Çekiliş 2</td>
                            <td><a href="http://localhost:8000/ckls-1" target="_blank">ckls-2</a></td>
                            <td>{{today()}}</td>
                            <td><a href="/get-draw/ckls-1" target="_blank" class="btn btn-success btn-sm">Kazananlar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">CKLS-3</th>
                            <th scope="row">erciyescagan</th>
                            <td>Çekiliş 3</td>
                            <td><a href="http://localhost:8000/ckls-1" target="_blank">ckls-3</a></td>
                            <td>{{today()}}</td>
                            <td><a href="/get-draw/ckls-1" target="_blank" class="btn btn-success btn-sm">Kazananlar</a></td>
                        </tr>
                        <tr>
                            <th scope="row">CKLS-4</th>
                            <th scope="row">erciyescagan</th>
                            <td>Çekiliş 4</td>
                            <td><a href="http://localhost:8000/ckls-1" target="_blank">ckls-4</a></td>
                            <td>{{today()}}</td>
                            <td><a href="/get-draw/ckls-1" target="_blank" class="btn btn-success btn-sm">Kazananlar</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('panel.footer')
