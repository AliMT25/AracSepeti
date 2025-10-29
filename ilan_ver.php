<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Yeni İlan Oluştur</h1>
                <form>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Seçin</label>
                        <select class="form-select" id="kategori">
                            <option selected>Lütfen bir kategori seçin...</option>
                            <option value="otomobil">Otomobil</option>
                            <option value="motosiklet">Motosiklet</option>
                            <option value="arazi">Arazi, SUV & Pickup</option>
                            <option value="ticari">Ticari Araçlar</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="baslik" class="form-label">İlan Başlığı</label>
                        <input type="text" class="form-control" id="baslik" placeholder="Örn: Sahibinden Temiz...">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fiyat" class="form-label">Fiyat (TL)</label>
                            <input type="number" class="form-control" id="fiyat">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="yil" class="form-label">Model Yılı</label>
                            <input type="number" class="form-control" id="yil" placeholder="Örn: 2018">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="km" class="form-label">Kilometre (KM)</label>
                            <input type="number" class="form-control" id="km">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="vites" class="form-label">Vites Tipi</label>
                            <select class="form-select" id="vites">
                                <option value="manuel">Manuel</option>
                                <option value="otomatik">Otomatik</option>
                                <option value="yari-otomatik">Yarı Otomatik</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="yakit" class="form-label">Yakıt Tipi</label>
                        <select class="form-select" id="yakit">
                            <option value="benzin">Benzin</option>
                            <option value="dizel">Dizel</option>
                            <option value="lpg">Benzin & LPG</option>
                            <option value="elektrik">Elektrik</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="aciklama" class="form-label">Açıklama</label>
                        <textarea class="form-control" id="aciklama" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="resimler" class="form-label">İlan Resimleri</label>
                        <input class="form-control" type="file" id="resimler" multiple>
                        <div class="form-text">Birden fazla resim seçebilirsiniz.</div>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-success btn-lg">İlanı Yayınla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>