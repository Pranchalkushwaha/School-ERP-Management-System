
        

        <!-- Teacher start  -->
        <div class="teacher">
            <div class="heading">
                <h3>Manage Class <button id = "addBtn">Add Class</button></h3>
            </div>
            <div class="tbody">
                <table id = "manageTeacherTable">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Age</td>
                            <td>Email</td>
                            <td>Contact</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    
                </table>
            </div>
            <!-- bg-modal start  -->
            <div class="bg-modal">
                <!-- modal_content start  -->
                <div class="modal_content">
                <form action="<?php echo base_url();?>Teacher/create" method = "post" enctype = "multipart/form-data">
                    <div class = "close">+</div>
                    <?php echo $error;?>
                    <div id = "teacher_img">
                        <input type="file" name="teacher_image" onchange = "loadFile(event)">
                        <img src="<?php echo base_url();?>assets/images/teacher.jpg" alt="Teacher" id = "output">
                    </div>
                    <h6>Upload Image</h6>
                    <input type="text" name = "teacher_name" placeholder= "Name">
                    <input type="text" name = "teacher_age" placeholder= "Age">
                    <input type="text" name = "teacher_email" placeholder= "E-Mail">
                    <input type="text" name = "teacher_contact" placeholder= "Contact">
                    <button type = "submit" class = "btn">Submit</button>
                </form>    
                </div>
                <!-- modal_content end  -->
            </div>
            <!-- bg-modal end  -->
        </div>
        <!-- Teacher end  -->

        </div>
        <!-- main end  -->
    </div>
    <!-- container end  -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/teacher.css">
    <script src="<?php echo base_url();?>assets/js/teacher.js"></script>

    <script src="<?php echo base_url();?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>


    
</body>
</html>
