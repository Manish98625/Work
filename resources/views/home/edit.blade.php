<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
        }


        button {
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body bg-light">
                <div class=" justify-content-center">
                    <div class="col-md-6">
                        <form action="/update/{{ $data->id }}" method="post" class="p-4 progress-form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1"
                                tabindex="0">
                                <div class="sm:d-grid sm:grid-col-2 mt-5 sm:mt-3">
                                    <div class="mt-3 sm:mt-0 form__field">
                                        <label for="first-name">
                                           Name
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="first-name" type="text" name="name" autocomplete="given-name"
                                            value="{{ $data->name }}" required>
                                    </div>
                                    <div class="mt-3 form__field">
                                        <label for="mydate">
                                            Date of Birth
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="mydate" type="date" name="date" autocomplete="date"
                                            inputmode="date" value="{{ $data->date }}" required>
                                    </div>
                                    <div class="mt-3  form__field">
                                        <label for="myNationality">
                                            Nationality
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="myNationality" type="text" name="national"
                                            autocomplete="country-name"     value="{{ $data->national }}"required>
                                    </div>
                                    <div class="mt-3 form__field">
                                        <label for="email-address">
                                            Email address
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="email-address" type="email" name="email" autocomplete="email"
                                            inputmode="email" value="{{ $data->email }}"   required>
                                    </div>
                                    <div class="mt-3 form__field">
                                        <label for="phone-number">
                                            Phone number
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="phone-number" type="tel" name="phonenumber" autocomplete="tel"
                                            inputmode="tel"      value="{{ $data->phonenumber }}"required>
                                    </div>
                                </div>
                                <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
                                    <div class="mt-3 md-2form-control-sm">
                                        <label for="address">
                                            Address
                                            <span data-required="true" aria-hidden="true"></span>
                                        </label>
                                        <input id="address" type="text" name="address"
                                            autocomplete="shipping address-line1"    value="{{ $data->address }}" required>
                                    </div>
                                </div>
                                <fieldset eldset class="row mb-3 mt-3">
                                    <legend class="  h4 form-label   col-sm-4 pt-0 text-primary " name="gender"   value="{{ $data->gender }}">Gender
                                    </legend>
                                    <div class="col-sm-10">
                                        <div class="form-check form-group">
                                            <input class="form-check-input  mt-1" type="radio" name="gender"
                                                id="gridRadios1" {{ $data->gender === 'Male' ? 'checked': '' }}  value="Male">
                                            <label class="form-check-label" for="gridRadios1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check form-group">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios2"  {{ $data->gender === 'Female' ? 'checked': '' }}  value="Female">
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check form-group ">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="gridRadios3"  {{ $data->gender === 'Others' ? 'checked': '' }}  value="others">
                                            <label class="form-check-label" for="gridRadios">
                                                Others
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="product-purchase" name="skill[]"   class="mt-3 form__field">
                                    <legend>
                                        skill
                                    </legend>
                                    <label class="form__choice-wrapper">
                                        <input type="checkbox" name="skill[]" value="PHP" {{ in_array('PHP', explode(',' , $data->skill)) ? 'checked' : '' }}>
                                        <span>PHP</span>
                                    </label><br>
                                    <label class="form__choice-wrapper">
                                        <input type="checkbox" name="skill[]" value="JavaScript" {{ in_array('JavaScript', explode(',' , $data->skill)) ? 'checked' : '' }}>
                                        <span>JavaScript</span>
                                    </label><br>
                                    <label class="form__choice-wrapper">
                                        <input type="checkbox" name="skill[]" value="Python"{{ in_array('Python', explode(',' , $data->skill)) ? 'checked' : '' }}>
                                        <span>Python</span>
                                    </label><br>
                                </fieldset>
                                
                               
                    </div>
                    <div class="col-8">
                        <label for="formGroup" class="form-label text-primary">Profile Picture:</label>
                        <input type="file" name="image"   value="{{ $data->image}}"class="form-control" id="formGroup" placeholder="">
                    </div>
                    <div class="d-grid sm-2">
                        <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                    </div>
                    </section>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
