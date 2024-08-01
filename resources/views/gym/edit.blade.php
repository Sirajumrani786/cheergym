@include('.includes.header')
<!-- Include Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Gym</h1>
            <form action="{{ route('gym.update', $gym->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title pull-left mt-3">Basic Info</h4>
                        <a href="{{ route('gym.index') }}" class="pull-right btn btn-fill btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Name and Description Fields -->
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <input type="text" id="name" name="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        placeholder="EXAMPLE: Fitness" value="{{ old('name', $gym->name) }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gymLocation">City</label>
                                    <input type="text" name="location" class="form-control" id="city" placeholder="City" value="{{ old('location', $gym->location) }}" required>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gymLocation">State</label>
                                        <select class="form-control" name="state" id="gymLocation" required>
                                            <option disabled>State</option>
                                            <option value="AL" {{ $gym->state === "AL" ? 'selected' : '' }}>Alabama</option>
                                            <option value="AK" {{ $gym->state === "AK" ? 'selected' : '' }}>Alaska</option>
                                            <option value="AZ" {{ $gym->state === "AZ" ? 'selected' : '' }}>Arizona</option>
                                            <option value="AR" {{ $gym->state === "AR" ? 'selected' : '' }}>Arkansas</option>
                                            <option value="CA" {{ $gym->state === "CA" ? 'selected' : '' }}>California</option>
                                            <option value="CO" {{ $gym->state === "CO" ? 'selected' : '' }}>Colorado</option>
                                            <option value="CT" {{ $gym->state === "CT" ? 'selected' : '' }}>Connecticut</option>
                                            <option value="DE" {{ $gym->state === "DE" ? 'selected' : '' }}>Delaware</option>
                                            <option value="FL" {{ $gym->state === "FL" ? 'selected' : '' }}>Florida</option>
                                            <option value="GA" {{ $gym->state === "GA" ? 'selected' : '' }}>Georgia</option>
                                            <option value="HI" {{ $gym->state === "HI" ? 'selected' : '' }}>Hawaii</option>
                                            <option value="ID" {{ $gym->state === "ID" ? 'selected' : '' }}>Idaho</option>
                                            <option value="IL" {{ $gym->state === "IL" ? 'selected' : '' }}>Illinois</option>
                                            <option value="IN" {{ $gym->state === "IN" ? 'selected' : '' }}>Indiana</option>
                                            <option value="IA" {{ $gym->state === "IA" ? 'selected' : '' }}>Iowa</option>
                                            <option value="KS" {{ $gym->state === "KS" ? 'selected' : '' }}>Kansas</option>
                                            <option value="KY" {{ $gym->state === "KY" ? 'selected' : '' }}>Kentucky</option>
                                            <option value="LA" {{ $gym->state === "LA" ? 'selected' : '' }}>Louisiana</option>
                                            <option value="ME" {{ $gym->state === "ME" ? 'selected' : '' }}>Maine</option>
                                            <option value="MD" {{ $gym->state === "MD" ? 'selected' : '' }}>Maryland</option>
                                            <option value="MA" {{ $gym->state === "MA" ? 'selected' : '' }}>Massachusetts</option>
                                            <option value="MI" {{ $gym->state === "MI" ? 'selected' : '' }}>Michigan</option>
                                            <option value="MN" {{ $gym->state === "MN" ? 'selected' : '' }}>Minnesota</option>
                                            <option value="MS" {{ $gym->state === "MS" ? 'selected' : '' }}>Mississippi</option>
                                            <option value="MO" {{ $gym->state === "MO" ? 'selected' : '' }}>Missouri</option>
                                            <option value="MT" {{ $gym->state === "MT" ? 'selected' : '' }}>Montana</option>
                                            <option value="NE" {{ $gym->state === "NE" ? 'selected' : '' }}>Nebraska</option>
                                            <option value="NV" {{ $gym->state === "NV" ? 'selected' : '' }}>Nevada</option>
                                            <option value="NH" {{ $gym->state === "NH" ? 'selected' : '' }}>New Hampshire</option>
                                            <option value="NJ" {{ $gym->state === "NJ" ? 'selected' : '' }}>New Jersey</option>
                                            <option value="NM" {{ $gym->state === "NM" ? 'selected' : '' }}>New Mexico</option>
                                            <option value="NY" {{ $gym->state === "NY" ? 'selected' : '' }}>New York</option>
                                            <option value="NC" {{ $gym->state === "NC" ? 'selected' : '' }}>North Carolina</option>
                                            <option value="ND" {{ $gym->state === "ND" ? 'selected' : '' }}>North Dakota</option>
                                            <option value="OH" {{ $gym->state === "OH" ? 'selected' : '' }}>Ohio</option>
                                            <option value="OK" {{ $gym->state === "OK" ? 'selected' : '' }}>Oklahoma</option>
                                            <option value="OR" {{ $gym->state === "OR" ? 'selected' : '' }}>Oregon</option>
                                            <option value="PA" {{ $gym->state === "PA" ? 'selected' : '' }}>Pennsylvania</option>
                                            <option value="RI" {{ $gym->state === "RI" ? 'selected' : '' }}>Rhode Island</option>
                                            <option value="SC" {{ $gym->state === "SC" ? 'selected' : '' }}>South Carolina</option>
                                            <option value="SD" {{ $gym->state === "SD" ? 'selected' : '' }}>South Dakota</option>
                                            <option value="TN" {{ $gym->state === "TN" ? 'selected' : '' }}>Tennessee</option>
                                            <option value="TX" {{ $gym->state === "TX" ? 'selected' : '' }}>Texas</option>
                                            <option value="UT" {{ $gym->state === "UT" ? 'selected' : '' }}>Utah</option>
                                            <option value="VT" {{ $gym->state === "VT" ? 'selected' : '' }}>Vermont</option>
                                            <option value="VA" {{ $gym->state === "VA" ? 'selected' : '' }}>Virginia</option>
                                            <option value="WA" {{ $gym->state === "WA" ? 'selected' : '' }}>Washington</option>
                                            <option value="WV" {{ $gym->state === "WV" ? 'selected' : '' }}>West Virginia</option>
                                            <option value="WI" {{ $gym->state === "WI" ? 'selected' : '' }}>Wisconsin</option>
                                            <option value="WY" {{ $gym->state === "WY" ? 'selected' : '' }}>Wyoming</option>
                                        </select>

                                    </div>
                                </div>
                            
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-fill btn-primary ">Update</button>
                            </div>
                        </div>
                    </div>
        
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Initialize Flatpickr -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr(".timepicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "h:i K",
            time_24hr: false,
            onValueUpdate: function(selectedDates, dateStr, instance) {
                // Custom logic when a time is selected
                console.log("Selected time: ", dateStr);
            }
        });
    });
</script>

@include('.includes.footer')
