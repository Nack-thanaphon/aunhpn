<?php include './template/include/header.php'; ?>
<?php include './template/include/navbar.php'; ?>


<?php include './template/include/socialbutton.php'; ?>
<div class="container">
    <div class="row">

        <div class="row p-5">
            <div class="col-md-8">
                <nav aria-label="">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="#">ข่าวสาร</a></li>

                    </ol>
                </nav>
                <article class="blog-post">
                    <h2 class="blog-post-title">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                    <img style="object-fit: cover; width:100%;"
                        src="https://images.unsplash.com/photo-1643410223482-113e58195261?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt="">

                    <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                        Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                    <hr>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                        <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                        other highly repetitive body text used throughout. This is an example unordered list:</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definiton list:</p>
                    <dl>
                        <dt>HyperText Markup Language (HTML)</dt>
                        <dd>The language used to describe and define the content of a Web page</dd>
                        <dt>Cascading Style Sheets (CSS)</dt>
                        <dd>Used to describe the appearance of Web content</dd>
                        <dt>JavaScript (JS)</dt>
                        <dd>The programming language used to build advanced Web sites and applications</dd>
                    </dl>
                    <h2>Inline HTML elements</h2>
                    <p>HTML defines a long list of available inline tags, a complete list of which can be found on the
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer
                            Network</a>.
                    </p>
                    <ul>
                        <li><strong>To bold text</strong>, use <code
                                class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                        <li><em>To italicize text</em>, use <code
                                class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                        <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code
                                class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code
                                class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.
                        </li>
                        <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                                class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                        <li><del>Deleted</del> text should use <code
                                class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins>
                            text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                        <li>Superscript <sup>text</sup> uses <code
                                class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                            <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                        </li>
                    </ul>
                    <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                    <h2>Heading</h2>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h3>Sub-heading</h3>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <pre><code>Example code block</code></pre>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                        other highly repetitive body text used throughout.</p>
                </article>

                <article class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <blockquote>
                        <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.
                        </p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h3>Example table</h3>
                    <p>And don't forget about tables in these posts:</p>

            </div>

            <div class="col-md-4">
                <?php include './template/include/aside.php'; ?>
            </div>
        </div>


    </div>
</div>


<?php

include './template/include/script.php';
include "./template/include/footer.php"; ?>