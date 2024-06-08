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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Bootstrap JS --}}

    {{-- Navbar --}}
    <div class="nav-container">
        <div class="nav-bar">
            <div class="row">
                <div class="column">
                    <a href="/assurance"><img src="../image/arrowback.png" alt="back"></a>
                    <a href="/index"><img src="../image/home.png" alt="home"></a>
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
    <div class="tindakan-container">
        <div class="row-one">
            <div class="check">
                <a><img src="../image/checklist.png" alt="done" id="check" ></a>
                <label for="check">
                    Berangkat
                </label>
            </div>
            <div class="button-update">
            <button type="button" id="berangkatButton" class="btn">
                CHANGE
            </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a><img src="../image/checklist.png" alt="done" id="check" ></a>
                <label for="check">
                    Tiba
                </label>
            </div>
            <div class="button-update">
            <button type="button" id="tibaButton" class="btn">
                CHANGE
            </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a><img src="../image/checklist.png" alt="done" id="check" ></a>
                <label for="check">
                     Estimasi
                </label>
            </div>
            <div class="button-update">
                <button id="changeButton" class="btn">
                    CHANGE
                </button>
            </div>
        </div>
        <!-- Modal for pop up time -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Select Time</h2>
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
                <button class="btn" id="saveChanges">Save changes</button>
                <button class="btn" id="closeModal">Close</button>
                </div>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a><img src="../image/checklist.png" alt="done" id="check" ></a>
                <label for="check">
                    Update Tindakan
                </label>
            </div>
            <div class="button-update">
                <button type="button" id="text" onclick="location.href='/assurance3'">
                    CHANGE
                </button>
            </div>
        </div>
        <div class="row-one">
            <div class="check">
                <a><img src="../image/checklist.png" alt="done" id="check"></a>
                <label for="check">Tech Closed</label>
            </div>
            <div class="button-update">
                <button type="button" id="techButton" class="btn" data-bs-toggle="modal" data-bs-target="#confirmationModal">CHANGE</button>
            </div>
        </div>

    <!-- Modal for tech closed -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tech Closed</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Anda yakin ingin melakukan close ticket?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="confirmYes">Ya</button>
                    </div>
                </div>
            </div>
        </div>

    <script>
        let completedSteps = 0;
            const totalSteps = 5;

        function updatePercentage() {
            const percentage = Math.round((completedSteps / totalSteps) * 100);
            document.getElementById("percentage").textContent = percentage + "%";
        }

        function markAsCompleted(button) {
            button.textContent = "COMPLETED";
            button.classList.add("completed-btn");
            button.disabled = true;
            completedSteps++;
            updatePercentage();
        }
        
        function getCurrentTime() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            return `${hours}:${minutes}`;
        }

        // Function to mark the button as completed
        function markAsCompleted(button) {
            button.textContent = "COMPLETED";
            button.classList.add("completed-btn");
            button.disabled = true;
        }

        // Event listener for Berangkat button
        document.getElementById("berangkatButton").addEventListener("click", function() {
            const time = getCurrentTime();
            console.log("Berangkat time:", time);
            markAsCompleted(this);
        });

        // Event listener for Tiba button
        document.getElementById("tibaButton").addEventListener("click", function() {
            const time = getCurrentTime();
            console.log("Tiba time:", time);
            markAsCompleted(this);
        });

        // Get the modal
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("changeButton");
        var span = document.getElementsByClassName("close")[0];
        var closeModalButton = document.getElementById("closeModal");
        var saveChangesButton = document.getElementById("saveChanges");

        var hoursSelect = document.getElementById("hours");
        var minutesSelect = document.getElementById("minutes");

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
        btn.onclick = function() {
            modal.style.display = "flex";
        }

        // When the user clicks on <span> (x) or the close button, close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        closeModalButton.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks the save button, save the changes and close the modal
        saveChangesButton.onclick = function() {
            let selectedTime = `${hoursSelect.value}:${minutesSelect.value}`;
            console.log("Selected Time:", selectedTime);
            // Here you can handle the selected time (e.g., save it or update the UI)
            modal.style.display = "none";
            // Update the button to show completed status
            btn.textContent = "COMPLETED";
            btn.classList.add("completed-btn");
            btn.disabled = true;
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        document.getElementById("confirmYes").addEventListener("click", function() {
            var techButton = document.getElementById("techButton");
            markAsCompleted(techButton);
            var modal = bootstrap.Modal.getInstance(document.getElementById('confirmationModal'));
            modal.hide();
            window.location.href = '/assurance';
        });
    </script>
</body>

</html>
