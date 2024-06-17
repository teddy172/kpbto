<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASSURANCE-TINDAKAN</title>
    <link rel="stylesheet" type="text/css" href="../css/assurance2.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-iso.css">
</head>

<body>
    {{-- Bootstrap JS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Bootstrap JS --}}

    {{-- Navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row">
                <div class="column">
                    <a href="{{ url('/assurance/'.$time->teknisi_id)}}"><img src="../image/arrowback.png" alt="back"></a>
                    <a href="/"><img src="../image/home.png" alt="home"></a>
                </div>
                <div class="column-one" id="text" style="color: #FFFFFF">
                    Assurance
                </div>
                <div class="column">
                </div>
            </div>
        </div>
    </div>
    <div class="circle-wrapper">
        <div class="percentage" id ="percentage" style="color: #FFFFFF">
            0%
        </div>
    </div>

    <form action="{{ url('/assurance/update/'.$time->id) }}" method="post" id="mainForm">
    @csrf
    @method('put')
    <input type="hidden" name="estimasi" id="estimasiInput" value="{{ $time->waktu_estimasi ?? '00:00' }}"> <!--penyebab status tidak berubah-->
    <input type="hidden" name="tech_closed" id="statusInput" value="{{ $time->status ?? 'open' }}">
    <div class="tindakan-container">
        <div class="row-one">
            <div class="check">
                <a>{{ $time->teknisi_berangkat }}</a>
                <label for="check">
                    Berangkat
                </label>
            </div>
            <div class="button-update">
            <button type="submit" id="berangkatButton" class="btn" name="teknisi_berangkat">
                CHANGE
            </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a>{{ $time->teknisi_tiba }}</a>
                <label for="check">
                    Tiba
                </label>
            </div>
            <div class="button-update">
            <button type="submit" id="tibaButton" class="btn" name="teknisi_tiba">
                CHANGE
            </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a>{{ $time->waktu_estimasi }}</a>
                <label for="check">
                     Estimasi
                </label>
            </div>
            <div class="button-update">
                <button type="button" id="changeButton" class="btn" name="estimasi" data-bs-toggle="modal" data-bs-target="#myModal">
                    CHANGE
                </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a hidden>00:00:00</a>
                <label for="check" style="padding-left:70px">
                    Update Tindakan
                </label>
            </div>
            <div class="button-update">
                <a href="{{ url('/tindakan/'.$time->id) }}">
                    <button type="button" id="text">
                        CHANGE
                    </button>
                </a>
            </div>
        </div>
        </form>

        <!-- Modal for pop up time -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Selet Time</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <span class="close">&times;</span> <!--ini untuk mengirim-->

                    </div>
                    <div class="modal-body">
                        <div class="time-picker">
				            <select id="hours">

                    		</select>
                    		<span>:</span>
                    		<select id="minutes">

                    		</select>
			            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn" id="saveChanges">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn" id="closeModal" style="display:none">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <script>
        function getCurrentTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            return `${hours}:${minutes}`;
        }

        //mark the button as completed
        function markAsCompleted(button) {
            button.textContent = "COMPLETED";
            button.classList.add("completed-btn");
            button.disabled = true;
        }

        // Get the modal
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("changeButton");
        var span = document.getElementsByClassName("close")[0];
        var closeModalButton = document.getElementById("closeModal");
        var saveChangesButton = document.getElementById("saveChanges");

        var hoursSelect = document.getElementById("hours");
        var minutesSelect = document.getElementById("minutes");
        var estimasiInput = document.getElementById("estimasiInput");
        var statusInput = document.getElementById("statusInput");
        var statusButton = document.getElementById("statusButton");
        const mainForm = document.getElementById('mainForm');

        // Populate hours and minutes dropdowns
        for (let i = 0; i < 24; i++) {
            let option = document.createElement("option");
            option.value = option.text = String(i).padStart(2, '0');
            hoursSelect.add(option);
        }

        for (let i = 0; i < 60; i++) {
            let option = document.createElement("option");
            option.value = option.text = String(i).padStart(2, '0');
            minutesSelect.add(option);
        }

        // When the user clicks the button, open the modal
        btn.addEventListener("click", perluas);  
        span.addEventListener("click", tutup);

        function perluas(){
            modal.style.display = "flex";
        };
        function tutup(){
            modal.syle.display = "none"
        }

        // When the user clicks on <span> (x) or the close button, close the modal
        span.addEventListener("click", function() {
            modal.style.display = "none";
        });

        closeModalButton.addEventListener("click", function() {
            modal.style.display = "none";
        });

        //save the changes and close the modal
        saveChangesButton.addEventListener("click", function() {
            const selectedTime = `${hoursSelect.value}:${minutesSelect.value}`;
            estimasiInput.value = selectedTime; // Update the hidden input value
            console.log("Selected Time:", selectedTime);
            // Here you can handle the selected time (e.g., save it or update the UI)
            modal.style.display = "none";
            // Update the button to show completed status
            btn.textContent = "COMPLETED";
            btn.classList.add("completed-btn");
            btn.disabled = true;
        });

        //save status
        statusButton.addEventListener("click", function(){
            const status = "closed";
            statusInput.value = status;
            console.log("status now: ", status);
        })

        //click anywhere outside of the modal, close it
        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });

        mainForm.addEventListener('submit', function(event) {
        // No specific validation needed for other buttons
            if (!estimasiInput.value) {
                    estimasiInput.value = '00:00'; // Set a default value if empty
            }
    });
    </script>
</body>

</html>
