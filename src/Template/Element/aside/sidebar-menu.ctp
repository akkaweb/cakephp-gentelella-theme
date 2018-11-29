<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS. 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>Site Menu</h3>
            <ul class="nav side-menu">
            	<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/dashboards/index">Dashboard</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/users">View Users</a></li>
                        <li><a href="/admin/users/add">Add User</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Blog Articles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/blogs">View Blog Articles</a></li>
                        <li><a href="/admin/blogs/add">Add Blog Article</a></li>
                        <li><a href="/admin/blogs/category">View Blog Categories</a></li>
                        <li><a href="/admin/blogs/category/add">Add Blog Category</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Pages & Contents <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/contents">View Pages & Contents</a></li>
                        <li><a href="/admin/contents/add">Add Page & Content</a></li>
                        <li><a href="/admin/contents/content-path">View Content Paths</a></li>
                        <li><a href="/admin/contents/content-path/add">Add Content Path</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Events <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/events">View Events</a></li>
                        <li><a href="/admin/events/add">Add Event</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-clone"></i>Videos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/videos">View Videos</a></li>
                        <li><a href="/admin/videos/add">Add Video</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-table"></i> Feedbacks & Messages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/feedbacks">View Feedbacks</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Regions & Blocks <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/regions">View Regions</a></li>
                        <li><a href="/admin/regions/add">Add Region</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-clone"></i>Header Images <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/header-images">View Header Images</a></li>
                        <li><a href="/admin/header-images/add">Add Header Images</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-clone"></i>SEO <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/seo/seo-titles">View Seo Titles</a></li>
                        <li><a href="/admin/seo/seo-meta-tags">View Seo Meta Tags</a></li>
                        <li><a href="/admin/seo/seo-canonicals">View Seo Canonicals</a></li>
                        <li><a href="/admin/seo/seo-uris">View Seo URIs</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-clone"></i>FAQs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/faqs">View FAQs</a></li>
                        <li><a href="/admin/faqs/add">Add FAQ</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-clone"></i>Translations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/translations">View Translations</a></li>
                        <li><a href="/admin/translations/add">Add Translation</a></li>
                        <li><a href="/admin/languages">View Languages</a></li>
                        <li><a href="/admin/languages/add">Add Language</a></li>
                    </ul>
				</li>
                <li><a><i class="fa fa-clone"></i>Business Directory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/businesses">View Businesses</a></li>
                        <li><a href="/admin/businesses/add">Add Businesses</a></li>
                        <li><a href="/admin/businesses/categories">View Business Categories</a></li>
                        <li><a href="/admin/businesses/categories/add">Add Business Category</a></li>
                    </ul>
				</li>
			</ul>
		</div>
		<div class="menu_section">
            <h3>System Menu</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-clone"></i>System Tools <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/system/plugins">Plugin Listing</a></li>
                        <li><a href="/admin/system/backup">Database Backup</a></li>
                        <li><a href="/admin/system/build-admin-menu">Rebuild Admin Menu</a></li>
                        <li><a href="/admin/system/php">PHP Info</a></li>
                        <li><a href="/admin/system/configs">System Configurations</a></li>
                    </ul>
				</li>
			</ul>
		</div>
		<div class="menu_section">
            <h3>Theme Files</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Original Templates <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/admin/pages/index">Dashboard</a></li>
                        <li><a href="/admin/pages/index2">Dashboard2</a></li>
                        <li><a href="/admin/pages/index3">Dashboard3</a></li>
                        <li><a href="/admin/pages/form">General Form</a></li>
                        <li><a href="/admin/pages/form_advanced">Advanced Components</a></li>
                        <li><a href="/admin/pages/form_validation">Form Validation</a></li>
                        <li><a href="/admin/pages/form_wizards">Form Wizard</a></li>
                        <li><a href="/admin/pages/form_upload">Form Upload</a></li>
                        <li><a href="/admin/pages/form_buttons">Form Buttons</a></li>
                        <li><a href="/admin/pages/general_elements">General Elements</a></li>
                        <li><a href="/admin/pages/media_gallery">Media Gallery</a></li>
                        <li><a href="/admin/pages/typography">Typography</a></li>
                        <li><a href="/admin/pages/icons">Icons</a></li>
                        <li><a href="/admin/pages/glyphicons">Glyphicons</a></li>
                        <li><a href="/admin/pages/widgets">Widgets</a></li>
                        <li><a href="/admin/pages/invoice">Invoice</a></li>
                        <li><a href="/admin/pages/inbox">Inbox</a></li>
                        <li><a href="/admin/pages/calendar">Calendar</a></li>
                        <li><a href="/admin/pages/tables">Tables</a></li>
                        <li><a href="/admin/pages/tables_dynamic">Table Dynamic</a></li>
                        <li><a href="/admin/pages/chartjs">Chart JS</a></li>
                        <li><a href="/admin/pages/chartjs2">Chart JS2</a></li>
                        <li><a href="/admin/pages/morisjs">Moris JS</a></li>
                        <li><a href="/admin/pages/echarts">ECharts</a></li>
                        <li><a href="/admin/pages/other_charts">Other Charts</a></li>
                        <li><a href="/admin/pages/fixed_sidebar">Fixed Sidebar</a></li>
                        <li><a href="/admin/pages/fixed_footer">Fixed Footer</a></li>
                        <li><a href="/admin/pages/e_commerce">E-commerce</a></li>
                        <li><a href="/admin/pages/projects">Projects</a></li>
                        <li><a href="/admin/pages/project_detail">Project Detail</a></li>
                        <li><a href="/admin/pages/contacts">Contacts</a></li>
                        <li><a href="/admin/pages/profile">Profile</a></li>
                        <li><a href="/admin/pages/page_403">403 Error</a></li>
                        <li><a href="/admin/pages/page_404">404 Error</a></li>
                        <li><a href="/admin/pages/page_500">500 Error</a></li>
                        <li><a href="/admin/pages/plain_page">Plain Page</a></li>
                        <li><a href="/admin/pages/login">Login Page</a></li>
                        <li><a href="/admin/pages/pricing_tables">Pricing Tables</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->
<?php } ?>
