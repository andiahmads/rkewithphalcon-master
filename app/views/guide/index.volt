{% if session.level_pengguna == 'admin' %}
    {% include 'guide/admin.volt' %}
{% elseif session.level_pengguna == 'dokter' %}
    {% include 'guide/dokter.volt' %}
{% elseif session.level_pengguna == 'perawat' %}
    {% include 'guide/analisis.volt' %}
{% elseif session.level_pengguna == 'kasir' %}
    {% include 'guide/kasir.volt' %}
{% elseif session.level_pengguna == 'lab' %}
    {% include 'guide/lab.volt' %}
{% elseif session.level_pengguna == 'pendaftaran' %}

    {% include 'guide/pendaftaran.volt' %}
    </script>
<!-- build:js({.tmp,app}) scripts/app.min.js -->
<script src="vendor/jquery/dist/jquery.js"></script>
<script src="vendor/pace/pace.js"></script>
<script src="vendor/tether/dist/js/tether.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="vendor/fastclick/lib/fastclick.js"></script>
<script src="scripts/constants.js"></script>
<script src="scripts/main.js"></script>
<!-- endbuild -->


<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="vendor/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script src="vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<!-- end page scripts -->

<!-- initialize page scripts -->
<script src="scripts/forms/plugins.js"></script>

{% else %}
    {% include 'guide/apoteker.volt' %}
{% endif %}