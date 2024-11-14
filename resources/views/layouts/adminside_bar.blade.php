<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.php">  <img src="{{ asset('asmsy_assets/img/logo.png ') }}" alt="logo"> </a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                           
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('admin.students.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Students</a>
                                </li>
                          
                                <li class="nav-item">
                                    <a href="{{ route('admin.students.create') }}" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Admission Form</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
    <a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
    <ul class="nav sub-group-menu">
        <li class="nav-item">
            <a href="{{ route('teachers.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Teachers</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('teachers.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add Teacher</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('classsubject.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>Assign Class & Subject</a>
        </li>
        <li class="nav-item">
            <a href="teacher-payment.php" class="nav-link"><i class="fas fa-angle-right"></i>Payment</a>
        </li>
    </ul>
</li>

                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('parents.index') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Parents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="parents-details.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Parents Details</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('parents.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Parent</a>
                                </li>
                            </ul>
                        </li>
                                <li class="nav-item">
                            <a href="academic-session.php" class="nav-link"><i
                                    class="flaticon-script"></i><span> Academic Session</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-books"></i><span>Library</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-book.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Book</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-book.php" class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Book</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Acconunt</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="all-fees.php" class="nav-link"><i class="fas fa-angle-right"></i>All Fees
                                        Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a href="all-expense.php" class="nav-link"><i
                                            class="fas fa-angle-right"></i>Expenses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="add-expense.php" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                        Expenses</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                                    class="flaticon-maths-class-materials-cross-of-a-pencil-and-a-ruler"></i><span>Class</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('classes.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('classes.create')}}"  class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                        Class</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i
                            class="flaticon-open-book"></i><span>Subject</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="{{ route('subjects.index')}}" class="nav-link"><i class="fas fa-angle-right"></i>All
                                        Subjects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('subjects.create')}}"  class="nav-link"><i class="fas fa-angle-right"></i>Add New
                                    Subjects</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="all-subjects.php" class="nav-link"><i
                                    class="flaticon-open-book"></i><span>Subject</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="class-routine.php" class="nav-link"><i class="flaticon-calendar"></i><span>Class
                                    Routine</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="student-attendence.php" class="nav-link"><i
                                    class="flaticon-checklist"></i><span>Attendence</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                            <ul class="nav sub-group-menu">
                                <li class="nav-item">
                                    <a href="exam-schedule.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a href="exam-grade.php" class="nav-link"><i class="fas fa-angle-right"></i>Exam
                                        Grades</a>
                                </li>
                            </ul>
                        </li>
                        
                       
                        <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i
                                    class="flaticon-script"></i><span>Notice</span></a>
                        </li>
                         <li class="nav-item">
                            <a href="notice-board.php" class="nav-link"><i
                                    class="flaticon-script"></i><span>Meeting  files</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="messaging.php" class="nav-link"><i
                                    class="flaticon-chat"></i><span>Messeage</span></a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="map.php" class="nav-link"><i
                                    class="flaticon-planet-earth"></i><span>Map</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="account-settings.php" class="nav-link"><i
                                    class="flaticon-settings"></i><span>Account</span></a>
                        </li>
                    </ul>
                </div>
            </div>