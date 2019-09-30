<script>
    $(document).ready(function(){

        var img = document.querySelector('[name="avatar"]');
        img.onchange = function(){

        var image = this.files[0];

            if (image == undefined) {

                document.querySelector('#avatar-profile').src = "{{ asset(Auth::user()->avatar) }}";
            } else {

                getBase64(image, '#avatar-profile');
            }
        }

        function getBase64(file, selector) {

            var reader = new FileReader();
            reader.readAsDataURL(file);

            reader.onload = function () {

                document.querySelector(selector).src = reader.result;
            };

            reader.onerror = function (error) {

            console.log('Error: ', error);
            };
        }
    });

</script>
