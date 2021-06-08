</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <!-- Datatabels -->
    <script>
    $(document).ready(function() {
        $("#dataTable").DataTable();
    });
    </script>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-storage.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyB4MaW-E1FUqvkgw81SN91OsHE25cxNF0A",
        authDomain: "wisata-c7bfd.firebaseapp.com",
        databaseURL: "https://wisata-c7bfd-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "wisata-c7bfd",
        storageBucket: "wisata-c7bfd.appspot.com",
        messagingSenderId: "926227674909",
        appId: "1:926227674909:web:5f0857ed6e05874a3e93f4"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript" src="localhots/../js/upload_image.js"></script>
  </body>
</html>