<div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Randevu Ekle</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Randevu Ekle</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addrandevu.php" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">İsim Soyisim:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="musteri_username">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="recipient-name" name="musteri_mail">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Telefon Numarası:</label>
                                    <input type="number" class="form-control" id="recipient-name" name="musteri_phonenumber">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Almak İstediği Hizmet</label>
                                    <input type="text" class="form-control" id="recipient-name" name="hizmet_adi">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Randevu Saati:</label>
                                    <input type="time" class="form-control" id="recipient-name" name="randevu_zaman">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Randevu Tarihi:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="randevu_tarih">
                                  </div>
                                  <div class="">
                                  <select class="col-form-label" for="recipient-name" name="personel_adi">
                                    <option value="">Tercih Ettiğiniz Personel</option>
                                    <option value="Beyza Kurt">Beyza Kurt</option>
                                    <option value="Azra Taner">Azra Taner</option>
                                    <option value="Beren Kaya">Beren Kaya</option>
                                    <option value="Aysima Yılmaz">Aysima Yılmaz</option>
                                    <option value="Fadime Göker">Fadime Göker</option>


                                </select>
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Eklemek İstediği Mesaj:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="musteri_mesaj">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" name="submit" class="btn btn-primary">Randevu Ekle</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>