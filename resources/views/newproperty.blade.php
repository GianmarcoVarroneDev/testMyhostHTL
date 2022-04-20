<x-layout>
    <div class="container-fluid">
        <div class="row align-items-center vh-100">
            <div class="col-12">
                <div class="login-form pt-5">
                    <div class="section">
                        <h1>Crea una nuova proprietà</h1>
                        <h4>Inserisci le informazioni richieste</h4>
                    </div>
                    <div class="section mt-2 mb-5">
                        <form action="{{route('newproperty.create')}}" method="POST">
                            @csrf

                            {{-- hidden values  --}}
                            <input type="text" value="{{Auth::user()->id}}" hidden name="user_id">
                            <input type="text" name="longitude" id="longitude" class="form-control" hidden>
                            <input type="text" id="latitude" name="latitude" class="form-control" hidden>
                            <input type="text" name="province" id="province" hidden>
                            <input type="text" name="zip_code" id="zip_code" hidden>


                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control" id="property_name" placeholder="Nome dell'insegna" name="property_name">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control pac-input" id="property_address" placeholder="Indirizzo della proprietà" name="property_address" value="{{old('property_address')}}">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control" id="city" placeholder="Città" name="city">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control" id="country" placeholder="Nazione" name="country">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <select name="property_type" class="form-control">
                                        <option value="">Seleziona il tipo di proprietà</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Affittacamere">Affittacamere</option>
                                        <option value="B&B">B&B</option>
                                        <option value="Pensione">Pensione</option>
                                        <option value="Casa per vacanze">Casa per vacanze</option>
                                        <option value="Residence">Residence</option>
                                        <option value="Ristorante">Ristorante</option>
                                        <option value="Deposito Bagagli">Deposito Bagagli</option>
                                    </select>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="email" class="form-control" id="property_email" placeholder="Indirizzo Email" name="property_email">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" class="form-control" id="property_phone" placeholder="Numero di telefono" name="property_phone">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class=" mt-1 text-start">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheckb1" name="terms_conditions">
                                    <label class="form-check-label" for="customCheckb1">I Agree <a href="#">Terms &
                                            Conditions</a></label>
                                </div>
        
                            </div>
        
                            <div class="form-button-group">
                                <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
                            </div>
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<script>
    $(document).ready(function () {
        $("#latitude_Area").addClass("d-none");
        $("#longtitude_Area").addClass("d-none");
    });
</script>

<script type="text/javascript"
src="https://maps.google.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&libraries=places">
</script>
<script>
    $( document ).ready(function() {
        google.maps.event.addDomListener(window, 'load', initialize);
    
        function initialize() {
            var input = document.getElementById('property_address');
            var autocomplete = new google.maps.places.Autocomplete(input);
    
            autocomplete.setComponentRestrictions({
                   country:"it",
               });
    
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
                $('#city').val(place.address_components['1'].long_name)
                $('#country').val(place.address_components['5'].long_name)
                $('#province').val(place.address_components['4'].short_name)
                $('#zip_code').val(place.address_components['6'].short_name)

                console.log(place)
            });
        }
    });
</script>