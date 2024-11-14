 <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.php">  <img src="../assets/img/logo.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item ">
                            <a href="index.php" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                           
                        </li>
                        <li class="nav-item ">
                            <a href="all-students.php" class="nav-link"><i class="flaticon-classmates"></i><span>My Students</span></a>
                         
                        </li>
                      
                   
                     
                      
                        <li class="nav-item">
                            <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class Routine</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-checklist"></i><span>Attendence</span></a>

                             <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="student-attendance.php" class="nav-link"><i class="fas fa-angle-right"></i>Make roll call </a>
                                </li>
                                <li class="nav-item">
                                    <a href="view-attendance.php" class="nav-link"><i class="fas fa-angle-right"></i>View attendance </a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exams</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('teacher.exam.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Exam </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('teacher.exam.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Exam </a>
                                </li>
                                <li class="nav-item">
                                    <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam Grades</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="grade-students.php" class="nav-link"><i class="fas fa-angle-right"></i>Grade Students</a>
                                </li>
                            </ul>
                        </li>
                      
                       <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Assignmets</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('teacher.assignment.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Manage assignments</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ route('teacher.assignment.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add assignments</a>
                                </li>
                              
                            </ul>
                        </li>
                      


                          <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Test</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-test.php" class="nav-link"><i class="fas fa-angle-right"></i>Manage Tests</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="add-test.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Tests</a>
                                </li>
                                
                            </ul>
                        </li>
                      
                       
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="messaging.php" class="nav-link"><i class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                    
                       
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>