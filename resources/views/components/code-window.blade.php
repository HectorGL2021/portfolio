@props(['class' => ''])

<div class="code-window">
    <div class="code-header">
        <div class="code-buttons">
            <div class="code-button red"></div>
            <div class="code-button yellow"></div>
            <div class="code-button green"></div>
        </div>
    </div>
    <div class="code-content">
        <pre><code><span class="php-class">class</span> <span class="class">Developer</span> {
    <span class="php-private">private</span> <span class="php-variable">$name</span> = <span class="string">'Hector Garcia'</span>;
    <span class="php-private">private</span> <span class="php-variable">$skills</span> = [
        <span class="php-array-key">'PHP'</span> => <span class="string">'Laravel, CakePHP'</span>,
        <span class="php-array-key">'JavaScript'</span> => <span class="string">'Vue.js, React'</span>,
        <span class="php-array-key">'Database'</span> => <span class="string">'MySQL, Oracle'</span>,
        <span class="php-array-key">'DevOps'</span> => <span class="string">'Git, Linux'</span>
    ];

    <span class="php-public">public</span> <span class="php-function">function</span> <span class="method">code</span>() {
        <span class="php-return">return</span> <span class="string">"Clean, efficient, and scalable solutions"</span>;
    }

    <span class="php-public">public</span> <span class="php-function">function</span> <span class="method">innovate</span>() {
        <span class="php-return">return</span> <span class="string">"Industry 4.0 solutions"</span>;
    }
}

<span class="php-variable">$developer</span> = <span class="php-keyword">new</span> <span class="class">Developer</span>();
<span class="php-function">echo</span> <span class="php-variable">$developer</span><span class="php-arrow">-></span><span class="method">code</span>();</code></pre>
    </div>
</div> 