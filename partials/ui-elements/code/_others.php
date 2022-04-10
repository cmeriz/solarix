<!-- Progress bar -->
<!-- <div class="progress-bar">
    <div class="progress-bar__buffer">
        <div class="progress-bar__fill" style="width: 50%;"></div>
    </div>
    <span class="progress-bar__label">
        Progress: 20%
    </span>
</div> -->

<!-- 

Dropdown

To change position change {{ class-position }} with:
    dropdown--left
    dropdown--right

Inside dropdown-btn you can add any markup you want.

-->
<!-- <div class="dropdown-container">
    <button class="dropdown-btn dropdown-trigger">
        {{ Your button / label markup  }}
    </button>
    <div class="dropdown {{ class-position }}">
        <div class="dropdown__header">
            <h3 class="dropdown__header__title">
                Dropdown to left
            </h3>
            <span class="dropdown__header__detail">
                With icon button.
            </span>
        </div>
        <ul class="dropdown__menu">
            <li class="dropdown__menu__item">
                <a href="#" class="dropdown__menu__link">
                    <span class="dropdown__menu__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#check-circle" />
                        </svg>
                    </span>
                    <span class="dropdown__menu__label">
                        Option A1
                    </span>
                </a>
            </li>
            <li class="dropdown__menu__item">
                <a href="#" class="dropdown__menu__link">
                    <span class="dropdown__menu__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#check-circle" />
                        </svg>
                    </span>
                    <span class="dropdown__menu__label">
                        Option A2
                    </span>
                </a>
            </li>
            <li class="dropdown__separator"></li>
            <li class="dropdown__menu__item">
                <a href="#" class="dropdown__menu__link">
                    <span class="dropdown__menu__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#check-circle" />
                        </svg>
                    </span>
                    <span class="dropdown__menu__label">
                        Option B1
                    </span>
                </a>
            </li>
            <li class="dropdown__menu__item">
                <a href="#" class="dropdown__menu__link">
                    <span class="dropdown__menu__icon">
                        <svg class="feather">
                            <use href="./src/icons/feather-sprite.svg#check-circle" />
                        </svg>
                    </span>
                    <span class="dropdown__menu__label">
                        Option B2
                    </span>
                </a>
            </li>
        </ul>
        <div class="dropdown__footer">
            <button class="btn--primary dropdown__footer__btn">
                Footer
            </button>
        </div>
    </div>
</div> -->

<pre>
    <code class="language-html code-block">

&lt;!-- Progress bar --&gt;
&lt;div class=&quot;progress-bar&quot;&gt;
    &lt;div class=&quot;progress-bar__buffer&quot;&gt;
        &lt;div class=&quot;progress-bar__fill&quot; style=&quot;width: 50%;&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;span class=&quot;progress-bar__label&quot;&gt;
        Progress: 20%
    &lt;/span&gt;
&lt;/div&gt;

&lt;!-- 

Dropdown

To change position change {{ class-position }} with:
    dropdown--left
    dropdown--right

Inside dropdown-btn you can add any markup you want.

--&gt;
&lt;div class=&quot;dropdown-container&quot;&gt;
    &lt;button class=&quot;dropdown-btn dropdown-trigger&quot;&gt;
        {{ Your button / label markup  }}
    &lt;/button&gt;
    &lt;div class=&quot;dropdown {{ class-position }}&quot;&gt;
        &lt;div class=&quot;dropdown__header&quot;&gt;
            &lt;h3 class=&quot;dropdown__header__title&quot;&gt;
                Dropdown to left
            &lt;/h3&gt;
            &lt;span class=&quot;dropdown__header__detail&quot;&gt;
                With icon button.
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;ul class=&quot;dropdown__menu&quot;&gt;
            &lt;li class=&quot;dropdown__menu__item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown__menu__link&quot;&gt;
                    &lt;span class=&quot;dropdown__menu__icon&quot;&gt;
                        &lt;svg class=&quot;feather&quot;&gt;
                            &lt;use href=&quot;./src/icons/feather-sprite.svg#check-circle&quot; /&gt;
                        &lt;/svg&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;dropdown__menu__label&quot;&gt;
                        Option A1
                    &lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;dropdown__menu__item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown__menu__link&quot;&gt;
                    &lt;span class=&quot;dropdown__menu__icon&quot;&gt;
                        &lt;svg class=&quot;feather&quot;&gt;
                            &lt;use href=&quot;./src/icons/feather-sprite.svg#check-circle&quot; /&gt;
                        &lt;/svg&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;dropdown__menu__label&quot;&gt;
                        Option A2
                    &lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;dropdown__separator&quot;&gt;&lt;/li&gt;
            &lt;li class=&quot;dropdown__menu__item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown__menu__link&quot;&gt;
                    &lt;span class=&quot;dropdown__menu__icon&quot;&gt;
                        &lt;svg class=&quot;feather&quot;&gt;
                            &lt;use href=&quot;./src/icons/feather-sprite.svg#check-circle&quot; /&gt;
                        &lt;/svg&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;dropdown__menu__label&quot;&gt;
                        Option B1
                    &lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;dropdown__menu__item&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;dropdown__menu__link&quot;&gt;
                    &lt;span class=&quot;dropdown__menu__icon&quot;&gt;
                        &lt;svg class=&quot;feather&quot;&gt;
                            &lt;use href=&quot;./src/icons/feather-sprite.svg#check-circle&quot; /&gt;
                        &lt;/svg&gt;
                    &lt;/span&gt;
                    &lt;span class=&quot;dropdown__menu__label&quot;&gt;
                        Option B2
                    &lt;/span&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
        &lt;div class=&quot;dropdown__footer&quot;&gt;
            &lt;button class=&quot;btn--primary dropdown__footer__btn&quot;&gt;
                Footer
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

    </code>
</pre>