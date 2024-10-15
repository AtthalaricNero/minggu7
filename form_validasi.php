<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Menghentikan pengiriman form default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi password (minimal 8 karakter)
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Jika validasi sukses, kirim form menggunakan AJAX
                if (valid) {
                    $.ajax({
                        url: 'proses_validasi.php', // Ganti dengan URL file PHP untuk pemrosesan
                        type: 'POST',
                        data: { 
                            nama: nama, 
                            email: email, 
                            password: password 
                        },
                        success: function(response) {
                            // Tampilkan respons dari server
                            $("#result").html(response);
                        },
                        error: function() {
                            // Tampilkan pesan error jika gagal
                            $("#result").html("Terjadi kesalahan dalam pengiriman data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
