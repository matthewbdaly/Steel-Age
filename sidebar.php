                    <ul id="sidebar">
                        <li>
                            <?php get_search_form($echo); ?>
                        </li>
                        <li>
                            <img id="authorPic" src="<?php bloginfo('template_directory') ?>/images/photo.jpg" alt="Photo of me" title="Photo of me" />
                        </li>
                        <li>
                            <h3>About me</h3>
                        </li>
                        <li>
                            <p>I'm a web developer, based in South Norfolk. I've worked with a number of modern web technologies, including PHP, CodeIgniter, WordPress, and jQuery.</p>
                        </li>
                        <li>
                            <ul>
                                <li class="profileLink"><a class="profileLinkImage" href="http://twitter.com/mattbd"><img src="<?php bloginfo('template_directory') ?>/images/twitter.png" alt="Find me on Twitter" title="Find me on Twitter" /></a><span class="profileLinkText">Twitter</span></li>
                                <li class="profileLink"><a class="profileLinkImage" href="http://uk.linkedin.com/in/matthewbdaly"><img src="<?php bloginfo('template_directory') ?>/images/linkedin.png" alt="Find me on LinkedIn" title="Find me on LinkedIn" /></a><span class="profileLinkText">LinkedIn</span></li>
                                <li class="profileLink"><a class="profileLinkImage" href="https://github.com/matthewbdaly"><img src="<?php bloginfo('template_directory') ?>/images/github.png" alt="Find me on GitHub" title="Find me on GitHub" /></a><span class="profileLinkText">GitHub</span></li>
                                <li class="profileLink"><a class="profileLinkImage" href="http://feeds.feedburner.com/MatthewDalysBlog"><img src="<?php bloginfo('template_directory') ?>/images/rss.png" alt="Subscribe to my posts" title="Subscribe to my posts" /></a><span class="profileLinkText">Subscribe</span></li>
                            </ul>
                        </li>
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                        <?php endif; ?>
                    </ul>
