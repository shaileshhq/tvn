<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand" wire:navigate>
            <img src="{{ asset('admin_css/logo.png') }}" alt="logo" class="w-100 bg-white">
        </a>
        <div class="sidebar-toggler not-active">
            <i class="bi bi-list fs-3 text-white"></i>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            @if(adminCan('dashboard'))
            <li class="nav-item {{ isActiveRoute(['admin.dashboard']) ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-speedometer"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            @endif

            @if(adminCan('academic-year'))
            <li
                class="nav-item {{ isActiveRoute(['admin.academic-year.index', 'admin.academic-year.create', 'admin.academic-year.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.academic-year.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-building"></i>
                    <span class="link-title">Academic Year</span>
                </a>
            </li>
            @endif

            @if(adminCan('class'))
            <li
                class="nav-item {{ isActiveRoute(['admin.class.index', 'admin.class.create', 'admin.class.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.class.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-house-door-fill"></i>
                    <span class="link-title">Class</span>
                </a>
            </li>
            @endif

            @if(adminCan('student-register'))
            <li
                class="nav-item {{ isActiveRoute(['admin.student-register.index', 'admin.student-register.create', 'admin.student-register.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.student-register.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-people-fill"></i>
                    <span class="link-title">Registration</span>
                </a>
            </li>
            @endif

            @if(adminCanAny(['student-admission', 'student-promotion']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#student" role="button" aria-expanded="false"
                    aria-controls="student">
                    <i class="bi bi-people-fill"></i>
                    <span class="link-title">Student</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="student">
                <ul class="nav sub-menu">
                    @if(adminCan('student-admission'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.student-admission.index', 'admin.student-admission.create', 'admin.student-admission.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.student-admission.index') }}" class="nav-link">
                            Student Admission
                        </a>
                    </li>
                    @endif
                    @if(adminCan('student-promotion'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.student-promotion.index', 'admin.student-promotion.create', 'admin.student-promotion.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.student-promotion.index') }}" class="nav-link">
                            Student Promotion
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            @if(adminCanAny(['fees', 'concession', 'assign-fee', 'fee-deposit']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#fees" role="button" aria-expanded="false"
                    aria-controls="fees">
                    <i class="bi bi-database"></i>
                    <span class="link-title">Fees</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="fees">
                <ul class="nav sub-menu">
                    @if(adminCan('fees'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.fees.index', 'admin.fees.create', 'admin.fees.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.fees.index') }}" class="nav-link">
                            Fees
                        </a>
                    </li>
                    @endif
                    @if(adminCan('concession'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.concession.index', 'admin.concession.create', 'admin.concession.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.concession.index') }}" class="nav-link">
                            Concession
                        </a>
                    </li>
                    @endif
                    @if(adminCan('assign-fee'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.assign-fee.index', 'admin.assign-fee.create', 'admin.assign-fee.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.assign-fee.index') }}" class="nav-link">
                            Assign Fee
                        </a>
                    </li>
                    @endif
                    @if(adminCan('fee-deposit'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.fee-deposit.index', 'admin.fee-deposit.create', 'admin.fee-deposit.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.fee-deposit.index') }}" class="nav-link">
                            Fee Deposite
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            @if(adminCanAny(['nursery-to-nine', 'admission-eleven']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#business" role="button" aria-expanded="false"
                    aria-controls="business">
                    <i class="bi bi-caret-right-fill"></i>
                    <span class="link-title">Admission Form</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>

            <div class="collapse" id="business">
                <ul class="nav sub-menu">
                    @if(adminCan('nursery-to-nine'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.nursery-to-nine.index', 'admin.nursery-to-nine.create', 'admin.nursery-to-nine.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.nursery-to-nine.index') }}" class="nav-link">
                            Nursery to 9th
                        </a>
                    </li>
                    @endif
                    @if(adminCan('admission-eleven'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.admission-eleven.index', 'admin.admission-eleven.create', 'admin.admission-eleven.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.admission-eleven.index') }}" class="nav-link">
                            11th Class
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            @if(adminCanAny(['merit-list', 'tc-form', 'tc-upload', 'document', 'pdf']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#documents" role="button" aria-expanded="false"
                    aria-controls="documents">
                    <i class="bi bi-card-list"></i>
                    <span class="link-title">Documents</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="documents">
                <ul class="nav sub-menu">
                    @if(adminCan('merit-list'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.merit-list.index', 'admin.merit-list.create', 'admin.merit-list.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.merit-list.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">Merit List</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('tc-form'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.tc-form.index', 'admin.tc-form.create', 'admin.tc-form.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.tc-form.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">TC Form</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('tc-upload'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.tc-upload.index', 'admin.tc-upload.create', 'admin.tc-upload.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.tc-upload.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">TC Upload</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('document'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.document.index', 'admin.document.create', 'admin.document.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.document.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">M Documents</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('pdf'))
                    <li
                    class="nav-item {{ isActiveRoute(['admin.pdf.index', 'admin.pdf.create', 'admin.pdf.edit']) ? 'active' : '' }}">
                    <a href="{{ route('admin.pdf.index') }}" class="nav-link" wire:navigate>
                        <span class="link-title">Important PDF</span>
                    </a>
                </li>
                @endif
                </ul>
            </div>
            @endif

            @if(adminCanAny(['teacher', 'committee']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#team" role="button" aria-expanded="false"
                    aria-controls="team">
                    <i class="bi bi-person-lines-fill"></i>
                    <span class="link-title">Our Team</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="team">
                <ul class="nav sub-menu">
                    @if(adminCan('teacher'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.teacher.index', 'admin.teacher.create', 'admin.teacher.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.teacher.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">Teachers</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('committee'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.committee.index', 'admin.committee.create', 'admin.committee.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.committee.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">M Committee</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            @if(adminCanAny(['school-time', 'transport-rules', 'cbse-affiliate']))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#info" role="button" aria-expanded="false"
                    aria-controls="info">
                    <i class="bi bi-calendar-event"></i>
                    <span class="link-title">Info Corner</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="info">
                <ul class="nav sub-menu">
                    @if(adminCan('school-time'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.school-time.index', 'admin.school-time.create', 'admin.school-time.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.school-time.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">School Time</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('transport-rules'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.transport-rules.index', 'admin.transport-rules.create', 'admin.transport-rules.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.transport-rules.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">Trasnport Rules</span>
                        </a>
                    </li>
                    @endif
                    @if(adminCan('cbse-affiliate'))
                    <li
                        class="nav-item {{ isActiveRoute(['admin.cbse-affiliate.index', 'admin.cbse-affiliate.create', 'admin.cbse-affiliate.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.cbse-affiliate.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">CBSE Affiliate</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            @endif

            @if(adminCan('gallery'))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#gallery" role="button" aria-expanded="false"
                    aria-controls="gallery">
                    <i class="bi bi-images"></i>
                    <span class="link-title">Gallery</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="gallery">
                <ul class="nav sub-menu">
                    <li
                        class="nav-item {{ isActiveRoute(['admin.gallery.index', 'admin.gallery.create', 'admin.gallery.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.gallery.index') }}" class="nav-link" wire:navigate>
                            <span class="link-title">Photos</span>
                        </a>
                    </li>
                </ul>
            </div>
            @endif

            @if(adminCan('slider'))
            <li
                class="nav-item {{ isActiveRoute(['admin.slider.index', 'admin.slider.create', 'admin.slider.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.slider.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-newspaper"></i>
                    <span class="link-title">Slider</span>
                </a>
            </li>
            @endif

            @if(adminCan('news'))
            <li
                class="nav-item {{ isActiveRoute(['admin.news.index', 'admin.news.create', 'admin.news.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.news.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-newspaper"></i>
                    <span class="link-title">News</span>
                </a>
            </li>
            @endif

            @if(adminCan('events'))
            <li
                class="nav-item {{ isActiveRoute(['admin.events.index', 'admin.events.create', 'admin.events.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.events.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-calendar-event"></i>
                    <span class="link-title">Events</span>
                </a>
            </li>
            @endif

            @if(adminCan('enquiry'))
            <li
                class="nav-item {{ isActiveRoute(['admin.enquiry.index', 'admin.enquiry.create', 'admin.enquiry.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.enquiry.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-person-vcard"></i>
                    <span class="link-title">Enquiry</span>
                </a>
            </li>
            @endif

            @if(adminCan('testimonial'))
            <li
                class="nav-item {{ isActiveRoute(['admin.testimonial.index', 'admin.testimonial.create', 'admin.testimonial.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.testimonial.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-people-fill"></i>
                    <span class="link-title">Testimonials</span>
                </a>
            </li>
            @endif

            @if(adminCan('achievement'))
            <li
                class="nav-item {{ isActiveRoute(['admin.achievement.index', 'admin.achievement.create', 'admin.achievement.edit']) ? 'active' : '' }}">
                <a href="{{ route('admin.achievement.index') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-award"></i>
                    <span class="link-title">Student Achievement</span>
                </a>
            </li>
            @endif

            @if(adminCan('web_setup'))
            <li class="nav-item {{ isActiveRoute(['admin.web_setup']) ? 'active' : '' }}">
                <a href="{{ route('admin.web_setup') }}" class="nav-link" wire:navigate>
                    <i class="bi bi-gear-wide-connected"></i>
                    <span class="link-title">Website Setup</span>
                </a>
            </li>
            @endif

            @if(adminCan('roles'))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#roles" role="button" aria-expanded="false"
                    aria-controls="roles">
                    <i class="bi bi-shield-lock"></i>
                    <span class="link-title">User Management</span>
                    <i class="bi bi-chevron-down link-arrow"></i>
                </a>
            </li>
            <div class="collapse" id="roles">
                <ul class="nav sub-menu">
                    <li class="nav-item {{ isActiveRoute(['admin.roles.index', 'admin.roles.create', 'admin.roles.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.roles.index') }}" class="nav-link">
                            Roles & Permissions
                        </a>
                    </li>
                    <li class="nav-item {{ isActiveRoute(['admin.admin-users.index', 'admin.admin-users.create', 'admin.admin-users.edit']) ? 'active' : '' }}">
                        <a href="{{ route('admin.admin-users.index') }}" class="nav-link">
                            Admin Users
                        </a>
                    </li>
                </ul>
            </div>
            @endif
        </ul>
    </div>
</nav>
