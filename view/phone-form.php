<div class="container py-5">
    <div class="row">
        <div class="mx-auto col-lg-8 col-xl-6">
            <div class="rounded-3 bg-black bg-opacity-50">
                <form class="text-white p-4 p-sm-5">
                    <h2>Szukasz najlepszej oferty?</h2>
                    <p>Zostaw aplikację, a nasz menedżer skontaktuje się z Tobą w celu konsultacji</p>

                    <div class="input-group mb-3">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" class="p-2" required>
                    </div>

                    <div class="input-group mb-3">
                        <label for="resultCountry">Kraj</label>
                        <input type="text" id="resultCountry" class="p-2 text-white" disabled>
                    </div>

                    <button type="button" onclick="getCountryByNumber()">Otrzymaj ofertę</button>
                </form>
            </div>
        </div>
    </div>
</div>
