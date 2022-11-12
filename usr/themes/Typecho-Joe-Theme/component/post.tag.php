<section class="tags">
    <!-- 标签 -->
    <section class="list"><?php $this->tags(""); ?></section>
    <!-- 操作按钮 -->
    <section class="handle">
        <section class="item" id="read" title="朗读文章">
            <svg viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M513.6 909.6c-7.2 0-13.6-2.4-19.2-7.2 0 0-40.8-36.8-87.2-76-78.4-64.8-103.2-77.6-108.8-79.2H92.8c-12.8 0-23.2-10.4-23.2-24V300.8c0-12.8 10.4-24 23.2-24H278.4c6.4-2.4 32.8-13.6 120.8-80 51.2-38.4 97.6-76 97.6-76 4.8-4 11.2-6.4 17.6-6.4 4 0 8.8 0.8 12.8 3.2 9.6 4.8 16 15.2 16 26.4v736c0 11.2-6.4 22.4-16.8 27.2-4.8 1.6-8.8 2.4-12.8 2.4zM300 699.2c16.8 0 42.4 7.2 147.2 93.6 14.4 12 29.6 24.8 45.6 38.4l4.8 4V184.8l-4.8 3.2c-20 15.2-39.2 30.4-57.6 44C320 318.4 294.4 324.8 277.6 324.8H134.4c-17.6 0-19.2 11.2-19.2 23.2V672c0 20.8 5.6 26.4 24.8 26.4h158.4l1.6 0.8z m457.6 142.4c-12.8 0-23.2-10.4-23.2-24 0-10.4 7.2-17.6 14.4-21.6 99.2-59.2 160-168 160-284.8 0-116.8-61.6-225.6-160-284.8-8.8-4.8-13.6-12.8-13.6-21.6 0-12.8 10.4-24 23.2-24 4.8 0 8.8 1.6 14.4 4.8 112.8 67.2 182.4 192 182.4 324.8 0 133.6-70.4 257.6-183.2 324.8-5.6 4.8-9.6 6.4-14.4 6.4z m-79.2-134.4c-12.8 0-23.2-10.4-23.2-24 0-8.8 4-16 11.2-20.8 54.4-30.4 88-88 88-150.4 0-61.6-32.8-118.4-84.8-149.6-7.2-4-11.2-12-11.2-20.8 0-12.8 10.4-24 23.2-24 4 0 10.4 2.4 13.6 4 65.6 39.2 107.2 112 107.2 189.6 0 79.2-42.4 152.8-110.4 192-1.6 0-8 4-13.6 4z" fill="" p-id="7983"></path>
            </svg>
            <span>朗读</span>
        </section>
        <section class="share">
            <section class="item j-drop" title="分享转发">
                <svg t="1604295942550" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="8358" width="200" height="200">
                    <path d="M770.759 631.481c-50.197 0-91.202 26.866-110.291 68.578L417.97 596.84c14.14-21.917 21.917-48.782 21.917-77.77 0-12.018-1.414-24.037-4.242-35.349l154.83-120.188c20.504 15.554 46.662 24.745 75.649 24.745 69.992 0 122.31-52.318 122.31-121.603s-52.318-121.602-122.31-121.602-121.602 52.317-121.602 121.602c0 17.675 3.535 33.936 9.19 48.076L410.9 424.333c-28.28-42.42-74.94-72.113-127.965-72.113-86.96 0-156.952 69.992-156.952 156.952s69.992 156.952 156.952 156.952c32.522 0 62.922-8.484 87.667-24.038l278.554 118.775c3.535 65.75 54.438 114.532 121.603 114.532 69.992 0 121.602-52.317 121.602-121.602s-52.317-122.31-121.602-122.31zM666.124 195.975c34.642 0 69.992 26.159 69.992 69.992s-26.159 69.992-69.992 69.992-69.992-34.642-69.992-69.992 35.35-69.992 69.992-69.992zM282.935 613.807c-52.317 0-96.15-43.834-96.15-96.151s43.833-96.15 96.15-96.15 96.15 43.833 96.15 96.15c-0.706 52.317-43.833 96.15-96.15 96.15zM770.76 823.076c-43.834 0-69.993-26.159-69.993-69.992s34.643-69.992 69.993-69.992 69.992 26.158 69.992 69.992c-0.707 43.833-26.866 69.992-69.992 69.992z" p-id="8359"></path>
                </svg>
                <span>分享</span>
            </section>
            <section class="j-dropdown">
                <a target="_blank" href="//connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&title=<?php $this->title() ?>&pics=<?php GetRandomThumbnail($this) ?>">分享到QQ</a>
                <a target="_blank" href="//service.weibo.com/share/share.php?title=分享：<?php $this->title() ?>，原文链接：<?php $this->permalink() ?>">分享到微博</a>
                <div id="j-share-code"></div>
            </section>
        </section>
    </section>
</section>
