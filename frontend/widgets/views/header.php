<div class="header">
    <div class="container">
        <div class="header__row">
            <a href="/" class="header__logo logo">
                <img src="/img/logo.svg" alt="Logo">
            </a>
            <div class="header__info header-info">
                <div class="header-info__columns">
                    <div class="header-info__item header-info-one">
                        <div class="header-info__socials-row">
                            <div class="header-info__socials socials">
                                <?php if($settings->ok) : ?>
                                <a href="<?= $settings->ok ?>" target="_blank" class="socials__icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1583 18.0007H3.8422C2.81617 18.0007 1.85135 17.6011 1.12548 16.8757C0.40006 16.1498 0 15.185 0 14.1581V3.84293C0 2.81645 0.40006 1.85118 1.12548 1.12576C1.85135 0.400342 2.81617 0.000732422 3.8422 0.000732422H14.1583C15.1843 0.000732422 16.1491 0.400342 16.875 1.12576C17.6004 1.85118 18.0005 2.816 18.0005 3.84293V14.1585C18.0005 15.185 17.6004 16.1503 16.875 16.8757C16.1491 17.6011 15.1843 18.0007 14.1583 18.0007ZM3.8422 1.80033C3.29678 1.80033 2.78377 2.01273 2.39811 2.39884C2.01245 2.78405 1.80005 3.29706 1.80005 3.84293V14.1585C1.80005 14.7044 2.01245 15.2174 2.39811 15.6026C2.78377 15.9883 3.29678 16.2011 3.8422 16.2011H14.1583C14.7037 16.2011 15.2167 15.9887 15.6023 15.6026C15.988 15.217 16.2004 14.7039 16.2004 14.1581V3.84293C16.2004 3.29706 15.988 2.78405 15.6023 2.39884C15.2162 2.01273 14.7037 1.80033 14.1583 1.80033H3.8422Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.00018 3.15039C10.7404 3.15039 12.1503 4.56028 12.1503 6.30047C12.1503 8.04066 10.7404 9.45055 9.00018 9.45055C7.25998 9.45055 5.8501 8.04066 5.8501 6.30047C5.8501 4.56028 7.25998 3.15039 9.00018 3.15039ZM9.00018 7.6784C9.7454 7.6784 10.3502 7.07359 10.3502 6.32837C10.3502 5.58315 9.7454 4.97834 9.00018 4.97834C8.25496 4.97834 7.65014 5.58315 7.65014 6.32837C7.65014 7.07359 8.25496 7.6784 9.00018 7.6784Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5295 12.1069C11.1555 11.9291 11.7513 11.6456 12.2927 11.2555C12.6185 11.0201 12.6986 10.5562 12.4713 10.2191C12.2441 9.88204 11.7954 9.80014 11.4687 10.0341C10.7433 10.5584 9.88959 10.8347 9.00082 10.8347C8.1143 10.8347 7.26242 10.5593 6.53701 10.0382C6.21075 9.80329 5.76164 9.88699 5.53528 10.2245C5.30803 10.562 5.38858 11.026 5.71529 11.2609C6.25485 11.6488 6.84841 11.9305 7.47168 12.1078L5.61133 14.0307C5.33008 14.3214 5.33008 14.7926 5.61133 15.0833C5.75174 15.2282 5.93579 15.3006 6.1203 15.3006C6.3048 15.3006 6.48886 15.2282 6.62926 15.0824L9.00037 12.6312L11.3715 15.0824C11.5123 15.2282 11.6964 15.3006 11.8804 15.3006C12.0649 15.3006 12.2485 15.2282 12.3894 15.0824C12.6707 14.7917 12.6707 14.3205 12.3894 14.0298L10.5295 12.1069Z" fill="white"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                                <?php if($settings->vk) : ?>

                                <a href="<?= $settings->vk ?>" target="_blank" class="socials__icon">
                                    <svg width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.7156 5.41452e-05C9.8698 -0.00183192 9.11561 0.0441107 8.44109 0.365996L8.43953 0.367514C8.11069 0.524994 7.87892 0.725017 7.69437 0.962739C7.6021 1.0816 7.50756 1.1883 7.45692 1.45927C7.4316 1.59475 7.41738 1.8143 7.56315 2.05146C7.70892 2.28861 8.00204 2.42346 8.18958 2.44777C8.31986 2.46462 8.61393 2.58628 8.64105 2.62239L8.64261 2.62542C8.64261 2.62542 8.75665 2.91463 8.78946 3.17206C8.82227 3.42948 8.8207 3.63822 8.8207 3.63822C8.82036 3.65898 8.82089 3.67975 8.82226 3.70047C8.82226 3.70047 8.8686 4.37494 8.83788 5.07162C8.82565 5.34928 8.7887 5.5963 8.7504 5.81717C8.46557 5.51151 8.04587 4.95798 7.43973 3.93735C6.76732 2.80447 6.23217 1.78877 6.23217 1.78877C6.20407 1.70028 6.10467 1.42497 5.71665 1.14799C5.29248 0.844109 4.88245 0.798749 4.88245 0.798749C4.83101 0.788721 4.77869 0.783635 4.72623 0.783565L1.57376 0.785083C1.57376 0.785083 1.38474 0.774456 1.15822 0.804823C0.931691 0.835189 0.590591 0.859904 0.261526 1.23909L0.259964 1.24061C-0.0341243 1.58217 -0.0163361 1.95969 0.0193893 2.17293C0.0551099 2.38617 0.13499 2.54798 0.13499 2.54798C0.136531 2.55103 0.138094 2.55407 0.139676 2.55709C0.139676 2.55709 2.71826 7.82675 5.63229 10.9297C7.74841 13.1828 9.92039 13.221 11.7123 13.221H13.0495C13.3909 13.221 13.6997 13.2081 14.0415 13.0145C14.3833 12.821 14.6133 12.3498 14.6133 12.023C14.6133 11.6805 14.6659 11.4113 14.7304 11.2729C14.7758 11.1756 14.8118 11.1405 14.8679 11.1119C14.8798 11.1193 14.8721 11.115 14.9054 11.1378C15.0385 11.2288 15.2584 11.4362 15.4974 11.695C15.9756 12.2126 16.5182 12.9225 17.2471 13.4093C17.7692 13.7584 18.2624 13.9134 18.6374 13.9696C18.8724 14.0049 19.0548 13.9981 19.1842 13.9878L22.1711 14C22.1888 14.0001 22.2065 13.9996 22.2242 13.9985C22.2242 13.9985 22.7388 14.0043 23.274 13.6933C23.5415 13.5377 23.8571 13.2429 23.9598 12.8126C24.0624 12.3823 23.9334 11.9365 23.6817 11.5295V11.528C23.7254 11.5984 23.6421 11.4537 23.5567 11.3184C23.4713 11.1832 23.3473 11.001 23.1693 10.7748C22.8133 10.3226 22.243 9.68981 21.3212 8.85555H21.3197C20.8515 8.43217 20.5354 8.1324 20.4058 7.96575C20.2762 7.79909 20.3187 7.88664 20.3277 7.84427C20.3456 7.75955 20.9075 6.97169 22.0508 5.48767C22.7458 4.58437 23.2335 3.9062 23.5552 3.34212C23.8768 2.77805 24.1088 2.28953 23.9473 1.69159L23.9457 1.68855C23.874 1.42607 23.6782 1.18414 23.4771 1.05233C23.2759 0.920519 23.0853 0.868969 22.9147 0.83671C22.5735 0.772193 22.2757 0.783565 21.9992 0.783565C21.4195 0.783565 18.8476 0.803304 18.6359 0.803304C18.3857 0.803304 17.9721 0.913889 17.7892 1.02044C17.3292 1.2895 17.1971 1.643 17.1971 1.643C17.1888 1.65793 17.181 1.67312 17.1737 1.68855C17.1737 1.68855 16.6431 2.8321 15.9599 3.96164C15.2677 5.10737 14.7564 5.65383 14.4477 5.90675C14.4392 5.86177 14.4406 5.8983 14.4352 5.83539C14.4075 5.51544 14.4383 5.07333 14.4383 4.6419C14.4383 3.48001 14.5396 2.66683 14.4852 1.9482C14.4579 1.58889 14.3895 1.21837 14.1462 0.877707C13.9029 0.537043 13.4981 0.315725 13.0979 0.221745C12.8579 0.165458 12.5842 0.0190568 11.5936 0.00916392H11.592C11.2891 0.00622133 10.9976 0.000682314 10.7156 5.41452e-05ZM11.5764 1.56404C12.453 1.57279 12.2346 1.6197 12.7215 1.7341C12.8724 1.76956 12.8359 1.76936 12.8324 1.76447C12.8289 1.75957 12.8732 1.83974 12.8902 2.0636C12.9241 2.51133 12.8386 3.40151 12.8386 4.6419C12.8386 4.98014 12.7966 5.46281 12.8402 5.96597C12.8837 6.46913 13.0121 7.11486 13.6306 7.50414C13.9239 7.68888 14.2643 7.70053 14.5555 7.63017C14.8466 7.55982 15.1107 7.41328 15.3881 7.19742C15.9428 6.7657 16.5615 6.03707 17.3393 4.74971C18.0662 3.54802 18.5949 2.40372 18.6124 2.36577C18.6159 2.36309 18.6193 2.36126 18.6234 2.35818C18.6334 2.35828 18.623 2.35818 18.6359 2.35818C18.9345 2.35818 21.4592 2.33844 21.9992 2.33844C22.1253 2.33844 22.1712 2.34583 22.2711 2.34907C22.2439 2.43712 22.2741 2.38096 22.1555 2.58898C21.9066 3.02527 21.4481 3.67365 20.7698 4.55535C19.6551 6.00226 18.9643 6.56923 18.7608 7.52996C18.6591 8.01032 18.8497 8.54278 19.1295 8.90262C19.4093 9.26246 19.7624 9.57074 20.2308 9.99437C21.0983 10.7795 21.6072 11.3499 21.8993 11.7208C22.0453 11.9063 22.1373 12.0402 22.1945 12.1308C22.2517 12.2214 22.2376 12.2118 22.3117 12.3312C22.3605 12.4107 22.3425 12.3622 22.3507 12.3859C22.2548 12.4122 22.1386 12.4438 22.132 12.4451L19.1904 12.433C19.1375 12.4329 19.0846 12.438 19.0327 12.4482C19.0327 12.4482 19.04 12.4566 18.8827 12.433C18.7253 12.4094 18.4751 12.3432 18.1532 12.1278C17.7646 11.8683 17.2207 11.2333 16.6878 10.6564C16.4214 10.368 16.1557 10.091 15.8255 9.86531C15.4953 9.63963 15.0013 9.42743 14.468 9.59047C13.9143 9.75945 13.4833 10.1794 13.2729 10.6306C13.1163 10.9664 13.1036 11.3172 13.0792 11.6662C13.0527 11.6681 13.0832 11.6662 13.0495 11.6662H11.7123C9.89534 11.6662 8.60518 11.7883 6.8133 9.88049C4.403 7.31392 2.19469 3.04358 1.83464 2.33996L4.60907 2.33844C4.65783 2.35663 4.7622 2.39472 4.76841 2.39918L4.77153 2.40221C4.67012 2.33016 4.77622 2.43106 4.77622 2.43106C4.78601 2.45434 4.79696 2.47715 4.80903 2.49939C4.80903 2.49939 5.35878 3.54334 6.05408 4.71479C6.73611 5.86321 7.23311 6.58062 7.71312 7.05469C7.95312 7.29172 8.19539 7.48183 8.5192 7.58918C8.84301 7.69652 9.26114 7.65715 9.54243 7.50718C10.1171 7.20144 10.1943 6.75047 10.2876 6.35621C10.381 5.96139 10.4183 5.5408 10.436 5.13843C10.4704 4.35741 10.4217 3.68148 10.4188 3.63973C10.419 3.6251 10.4226 3.34323 10.3766 2.98225C10.3295 2.61262 10.277 2.16069 9.93297 1.70525L9.93141 1.70373C9.92901 1.70055 9.926 1.70077 9.9236 1.69766C10.3785 1.63424 10.7677 1.55618 11.5764 1.56404ZM18.6327 2.32629L18.6218 2.35059C18.6201 2.35153 18.6207 2.34947 18.6187 2.35059C18.6221 2.34432 18.6327 2.32629 18.6327 2.32629Z" fill="white"/>
                                    </svg>
                                </a>
                                <?php endif; ?>

                                <?php if($settings->dzen) : ?>
                                <a href="<?= $settings->dzen ?>" target="_blank" class="socials__icon">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.84015 0.190882C7.81314 0.19135 7.78617 0.193424 7.7594 0.197094C3.74165 0.746153 0.564331 3.91743 0.00641863 7.93233C-0.00711168 8.03022 0.000807097 8.12988 0.029626 8.22441C0.0584448 8.31894 0.107474 8.40607 0.173317 8.47976C0.239159 8.55345 0.320238 8.61194 0.410936 8.65118C0.501633 8.69042 0.599779 8.70947 0.69857 8.70701C3.93726 8.62452 5.91208 8.36023 7.13203 7.08755C8.35198 5.81487 8.49607 3.87746 8.53319 0.880371C8.53426 0.789229 8.51704 0.698797 8.48255 0.614427C8.44806 0.530057 8.39699 0.453463 8.33237 0.389177C8.26775 0.32489 8.1909 0.274218 8.10635 0.240158C8.02181 0.206098 7.93129 0.189342 7.84015 0.190882ZM10.166 0.190882C10.0737 0.18752 9.98176 0.202927 9.89565 0.23617C9.80955 0.269413 9.73109 0.319799 9.66504 0.384272C9.59899 0.448744 9.54673 0.525961 9.51141 0.611239C9.4761 0.696517 9.45848 0.788078 9.45961 0.880371C9.49696 3.86802 9.64141 5.80224 10.8608 7.07424C12.0801 8.34624 14.0543 8.6148 17.2925 8.70257C17.3914 8.7053 17.4897 8.68644 17.5807 8.64732C17.6716 8.60819 17.7529 8.54974 17.8189 8.47601C17.8849 8.40229 17.9341 8.31507 17.9631 8.22041C17.992 8.12576 17.9999 8.02594 17.9864 7.92789C17.4265 3.91499 14.2497 0.745661 10.2334 0.197094C10.211 0.193907 10.1885 0.191834 10.166 0.190882ZM7.10363 1.80768C7.01934 4.03266 6.79173 5.47353 6.14793 6.14516C5.50047 6.8206 4.02147 7.12291 1.62588 7.25526C2.33515 4.56409 4.40634 2.50223 7.10363 1.80768ZM10.8901 1.80768C13.5848 2.50172 15.6542 4.56109 16.3651 7.24905C13.9719 7.11258 12.4926 6.8075 11.8449 6.13185C11.2009 5.46007 10.9746 4.02355 10.8901 1.80768ZM0.69857 9.67424C0.599779 9.67178 0.501633 9.69083 0.410936 9.73007C0.320238 9.76931 0.239159 9.8278 0.173317 9.90149C0.107474 9.97518 0.0584448 10.0623 0.029626 10.1568C0.000807097 10.2514 -0.00711168 10.351 0.00641863 10.4489C0.564321 14.4642 3.74159 17.6356 7.7594 18.1842C7.85647 18.1974 7.95526 18.1896 8.04903 18.1612C8.14281 18.1329 8.22936 18.0846 8.3028 18.0198C8.37624 17.9549 8.43484 17.875 8.47459 17.7854C8.51435 17.6959 8.53434 17.5988 8.53319 17.5009C8.49607 14.5036 8.352 12.5655 7.13203 11.2928C5.91206 10.0201 3.93726 9.7565 0.69857 9.67424ZM17.3173 9.67691C17.3093 9.67706 17.3013 9.67736 17.2933 9.67779C14.0547 9.76394 12.0807 10.0271 10.8608 11.2981C9.64082 12.5692 9.49673 14.5052 9.45961 17.5009C9.45846 17.5988 9.47845 17.6959 9.51821 17.7854C9.55796 17.875 9.61656 17.9549 9.69 18.0198C9.76344 18.0846 9.84999 18.1329 9.94377 18.1612C10.0375 18.1896 10.1363 18.1974 10.2334 18.1842C14.2502 17.6356 17.427 14.4658 17.9864 10.4525C17.9998 10.3565 17.9925 10.2587 17.9651 10.1657C17.9377 10.0727 17.8907 9.98664 17.8274 9.91324C17.7641 9.83984 17.6858 9.78078 17.5978 9.74003C17.5099 9.69928 17.4142 9.67776 17.3173 9.67691ZM1.62588 11.1251C4.0215 11.2573 5.50048 11.5607 6.14793 12.2361C6.79171 12.9077 7.01934 14.3484 7.10363 16.5736C4.40611 15.8792 2.33494 13.817 1.62588 11.1251ZM16.366 11.1304C15.6556 13.8192 13.5854 15.8794 10.8901 16.5736C10.9743 14.3508 11.2006 12.9127 11.844 12.2423C12.491 11.5682 13.9711 11.2652 16.366 11.1304Z" fill="white"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="header-info__socials socials">
                                <?php if($settings->telegram) : ?>
                                <a href="https://t.me/<?= $settings->telegram ?>" class="socials__icon">
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.667 0.00299487C16.445 0.0189949 16.227 0.0699948 16.021 0.154995H16.019C15.821 0.232995 14.883 0.622995 13.456 1.215L8.34505 3.34599C4.67705 4.87399 1.07005 6.379 1.07005 6.379L1.11305 6.362C1.11305 6.362 0.864046 6.443 0.605046 6.619C0.445046 6.72 0.306045 6.853 0.199045 7.009C0.0464126 7.2313 -0.0216876 7.50087 0.00704556 7.76899C0.0690456 8.26299 0.393046 8.55999 0.627046 8.72399C0.862046 8.88999 1.08605 8.96699 1.08605 8.96699H1.09105L4.47305 10.095C4.62405 10.576 5.50305 13.435 5.71405 14.094C5.83905 14.487 5.96005 14.733 6.11205 14.921C6.18505 15.017 6.27205 15.097 6.37405 15.161C6.42805 15.192 6.48505 15.217 6.54405 15.234L6.51005 15.226C6.52005 15.228 6.52905 15.236 6.53605 15.239C6.56405 15.247 6.58305 15.249 6.61805 15.255C7.15305 15.415 7.58305 15.087 7.58305 15.087L7.60805 15.067L9.60405 13.269L12.95 15.809L13.026 15.841C13.723 16.144 14.43 15.975 14.803 15.678C15.179 15.378 15.325 14.995 15.325 14.995L15.349 14.934L17.935 1.82499C18.008 1.50199 18.027 1.19899 17.946 0.904995C17.869 0.630364 17.6996 0.390697 17.4664 0.226391C17.2333 0.0620851 16.9516 -0.0168133 16.667 0.00299487ZM16.597 1.407C16.595 1.451 16.603 1.44599 16.584 1.52899V1.53599L14.022 14.508C14.012 14.527 13.992 14.568 13.942 14.608C13.887 14.65 13.844 14.677 13.619 14.588L9.52705 11.484L7.05505 13.714L7.57405 10.431L14.26 4.26399C14.536 4.00999 14.444 3.95699 14.444 3.95699C14.464 3.64499 14.028 3.86499 14.028 3.86499L5.59605 9.035L5.59305 9.021L1.55305 7.674V7.671L1.54205 7.669C1.54887 7.66674 1.55555 7.66407 1.56205 7.661L1.58505 7.65099L1.60605 7.643L8.88305 4.61L13.993 2.478C14.836 2.127 15.681 1.77799 16.527 1.42999C16.584 1.40799 16.557 1.407 16.597 1.407Z" fill="white"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                                <?php if($settings->whatsapp) : ?>
                                <a href="https://wa.me/<?= $settings->whatsapp ?>" class="socials__icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1496 3.33312L14.1534 3.33689C14.9088 4.07948 15.5103 4.96381 15.9234 5.93922C16.3365 6.91463 16.5531 7.96196 16.5609 9.02122C16.5414 11.144 15.6842 13.1731 14.176 14.6669C12.6666 16.1616 10.6282 17.0001 8.5039 17C7.16838 16.9901 5.85684 16.6442 4.69017 15.9941L4.54135 15.9112L4.37652 15.9545L0.632496 16.9341L1.62714 13.2871L1.67423 13.1175L1.58569 12.964C0.532909 11.1293 0.251064 8.95191 0.802021 6.90967C1.35298 4.86742 2.69172 3.1272 4.5244 2.07098C5.73736 1.37095 7.11285 1.00166 8.51332 1.00005H8.51426C9.5613 0.996266 10.5986 1.20056 11.5661 1.60108C12.5335 2.00159 13.4117 2.59034 14.1496 3.33312ZM8.51332 16.3972C10.4867 16.397 12.3803 15.6178 13.7823 14.2289C15.1841 12.8409 15.9806 10.9552 15.9985 8.9826V8.97318C15.9702 7.00011 15.1623 5.11842 13.7512 3.73908C12.7866 2.78698 11.5798 2.11711 10.2615 1.80209C8.94331 1.48707 7.564 1.53893 6.27316 1.95203C4.98231 2.36514 3.82918 3.12373 2.93879 4.14557C2.04839 5.1674 1.45472 6.41349 1.22212 7.74872C0.911297 9.53832 1.26922 11.3778 2.22524 12.9216L2.22901 12.9273L2.29682 13.0337L1.64692 15.427L1.45383 16.1363L2.16402 15.9479L4.62707 15.2952L4.72597 15.3573L4.73538 15.363C5.87926 16.0391 7.18361 16.396 8.51238 16.3962L8.51332 16.3972ZM10.0863 11.2582C10.3199 11.0011 10.5412 10.7326 10.7475 10.4529L10.7757 10.4623L10.7805 10.4642L10.7965 10.4699L10.8492 10.4925C10.8916 10.5113 10.9443 10.5339 11.0065 10.5631C11.129 10.6196 11.2797 10.6912 11.4332 10.7647C11.7384 10.9125 12.0464 11.0651 12.1509 11.1169L12.2696 11.1753C12.28 11.18 12.2913 11.1847 12.3007 11.1904L12.3854 11.2328C12.3952 11.4282 12.3597 11.6232 12.2818 11.8026C12.161 11.9996 12.0011 12.1698 11.8121 12.3028C11.6231 12.4358 11.4089 12.5287 11.1826 12.5759C10.4027 12.6617 9.61589 12.4946 8.93811 12.0993L8.92775 12.0927L8.91551 12.0871C7.52885 11.3876 6.34652 10.3415 5.48325 9.05042L5.47383 9.03629L5.46253 9.0231C5.02127 8.46706 4.7542 7.793 4.69488 7.08563C4.68149 6.81574 4.72561 6.54609 4.82434 6.29456C4.92308 6.04302 5.07415 5.81535 5.26756 5.62663L5.28263 5.61251L5.29581 5.59555C5.32536 5.56054 5.36211 5.53232 5.40356 5.51281C5.44501 5.4933 5.49019 5.48297 5.53599 5.48252H5.93347L5.98622 5.48347C6.0038 5.51439 6.01922 5.54649 6.03237 5.57954C6.08889 5.72082 6.18308 5.93275 6.27821 6.15221L6.42232 6.48187C6.49202 6.64294 6.55512 6.79081 6.60033 6.90384C6.622 6.95753 6.63801 6.99803 6.64743 7.02723V7.07998L6.68981 7.16192C6.54288 7.45014 6.39877 7.5999 6.27256 7.73271L6.21887 7.78922L6.21604 7.79205C6.15576 7.85704 6.0352 7.98514 5.98999 8.16504C5.96961 8.25689 5.96787 8.3519 5.98485 8.44444C6.00184 8.53698 6.03722 8.62517 6.08889 8.7038C6.76383 9.90405 7.82662 10.8393 9.10295 11.3562C9.22539 11.4409 9.38834 11.5238 9.57954 11.521C9.6783 11.5175 9.77502 11.4919 9.86268 11.4463C9.95033 11.4007 10.0267 11.3371 10.0863 11.2582Z" fill="white" stroke="white" stroke-width="0.9"/>
                                    </svg>
                                </a>
                                <?php endif; ?>

                                <?php if($settings->email) : ?>
                                <a href="mailto:<?= $settings->email ?>" class="socials__icon">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 2.5L8.108 6.612L8.11 6.614L10 8L11.893 6.612L17.5 2.5M1 11.8V4.2C1 3.08 1 2.52 1.218 2.092C1.41 1.715 1.715 1.41 2.092 1.218C2.52 1 3.08 1 4.2 1H15.8C16.92 1 17.48 1 17.907 1.218C18.284 1.41 18.59 1.715 18.782 2.092C19 2.519 19 3.079 19 4.197V11.804C19 12.922 19 13.48 18.782 13.908C18.5899 14.2844 18.2836 14.5903 17.907 14.782C17.48 15 16.921 15 15.803 15H4.197C3.079 15 2.519 15 2.092 14.782C1.71569 14.5903 1.40974 14.2843 1.218 13.908C1 13.48 1 12.92 1 11.8Z" stroke="white" stroke-width="1.5" stroke-linecap="square"/>
                                    </svg>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if($settings->call == 1) : ?>
                            <a href="#" class="header-info__button callback-button">Заказать звонок</a>
                        <?php endif; ?>
                        <?php if($settings->phone) : ?>
                            <div class="header-info__connect connect-box">
                                <a href="tel:<?= $settings->phone ?>" class="connect-box__link"><?= $settings->phone ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="header-info__item header-info-two">
                        <div class="header-info__menu">
                            <ul class="header-info__list header-list">
                                <li class="header-list__item">
                                    <a href="/services" class="header-list__link">Виды работ</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/company" class="header-list__link">О компании</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/works" class="header-list__link">Наши работы</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/vacancy" class="header-list__link">Вакансии</a>
                                </li>
                                <li class="header-list__item">
                                    <a href="/contacts" class="header-list__link">Контакты</a>
                                </li>
                            </ul>
                            <div class="header-info__connect connect-box">
                                <a href="tel:<?= $settings->phone ?>" class="connect-box__link"><?= $settings->phone ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__button-menu header-button-menu">
                <div class="header-button-menu__icon"></div>
                <div class="header-button-menu__body"></div>
            </div>
        </div>
        <div class="callback">
            <div class="main-modal">
                <div class="main-modal__close">
                    <span></span>
                    <span></span>
                </div>
                <h2 class="main-modal__title">Закажите обратный звонок</h2>
                <h3 class="main-modal__subtitle">Оставьте контактные данные и мы свяжемся с вами в ближайшее время</h3>
                <form class="main-form"  action="/services" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    <input type="hidden" name="Feedback[version]" value="3" />
                    <?php if($settings->call_list) : ?>
                    <div class="main-form__box">
                        <div class="main-form__icon">
                            <svg width="33.494919" height="32.000000" viewBox="0 0 33.4949 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M21.85 8.39L21.85 29.85C21.85 30.47 21.32 31 20.7 31L2.14 31C1.52 31 1 30.47 1 29.85L1 2.14C1 1.52 1.52 1 2.14 1L14.54 1" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M15.69 8.38C15.07 8.38 14.54 7.86 14.54 7.24L14.54 1.08L21.84 8.38L15.69 8.38Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M29.85 4.78L29.85 25.63C29.85 29.76 25.8 29.76 25.8 25.63L25.8 4.78L29.85 4.78Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M32.4 15.86L32.49 8.03L25.8 8.03" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M27.74 30.91L27.74 28.71" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M5.48 12.61L17.36 12.61" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M5.48 15.95L17.36 15.95" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M5.48 19.21L17.36 19.21" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M5.48 22.46L11.38 22.46" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                        </div>

                        <div class="main-form__elem main-form-select">
                            <div class="main-form-select__select">
                                <i class="main-form-select__icon" aria-hidden="true"></i>
                                <span class="main-form-select__span">Выбрать тему</span>
                            </div>
                            <input class="main-form-select__input" type="hidden"  name="Feedback[type]" id="typeF">
                            <ul class="main-form-select__options"  onclick="lang1(event);">
                                <?php foreach ($settings->call_list as $item) : ?>
                                <li class="main-form-select__option"><?= $item ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                    </div>
                    <?php endif; ?>
                    <div class="main-form__box">
                        <div class="main-form__icon">
                            <svg width="31.746490" height="31.999756" viewBox="0 0 31.7465 31.9998" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M1 24.39L1 23.69C1 22.19 2.58 21.23 3.81 20.96C4.96 20.7 9.44 19.73 10.85 18.76L10.94 18.76L13.05 22.55L19.21 22.55L20.8 18.76L20.88 18.76C22.29 19.73 26.78 20.7 27.93 20.96C29.25 21.23 30.74 22.11 30.74 23.69L30.74 24.39L30.13 30.99C30.3 30.91 1.7 30.99 1.7 30.99L1 24.39Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M15.87 18.23C13.84 18.15 11.64 15.95 10.85 12.87L10.5 12.95C10.06 13.04 9.62 12.69 9.53 12.25L9.18 9.61C9.09 9.17 9.44 8.64 9.88 8.64L10.15 8.55C10.06 8.11 9.97 7.67 9.97 7.23L9.97 6.18C9.97 3.8 11.82 1.78 14.02 1.78L14.46 1.78C14.46 1.69 14.46 1.6 14.46 1.51C14.72 0.81 16.4 0.81 18.16 1.6C18.51 1.78 18.86 1.95 19.21 2.13C20.71 2.83 21.68 4.33 21.68 6.18L21.68 7.14C21.68 7.59 21.59 8.03 21.5 8.47L21.77 8.55C22.21 8.64 22.47 9.08 22.47 9.52L22.12 12.16C22.03 12.6 21.59 12.95 21.15 12.87L20.88 12.95C20.09 15.95 17.89 18.15 15.87 18.23Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M10.41 5.3C10.41 5.3 11.29 7.23 13.05 8.2C14.81 9.17 16.57 6.26 18.33 7.23C20.09 8.2 21.85 9.17 21.85 9.17" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M21.06 26.15L25.46 26.15" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <input class="main-form__elem" type="text" name="Feedback[name]" id="name" placeholder="Введите ваше имя" required=""  autocomplete="off"></input>
                    </div>
                    <div class="main-form__box">
                        <div class="main-form__icon">
                            <svg width="31.999878" height="32.017090" viewBox="0 0 31.9999 32.0171" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M4.43 2.98C5.29 2.21 6.51 0.85 7.83 1C9.22 1.16 10.21 2.58 10.91 3.6C12.1 5.33 14.01 7.86 12.26 9.81C11.4 10.74 10.08 11.23 9.32 12.22C8.53 13.24 8.99 14.57 9.55 15.62C10.77 17.94 12.89 20.13 15 21.77C15.96 22.48 17.25 23.38 18.54 23.16C19.89 22.94 20.92 21.55 21.94 20.81C24.49 18.9 27.26 21.52 29.14 23.07C30 23.81 31.03 24.77 30.99 25.94C30.93 27.15 29.28 28.13 28.35 28.84C25.87 30.76 22.77 31.38 19.66 30.76C16.29 30.11 13.45 28.23 10.91 26.13C8.3 23.99 6.12 21.43 4.23 18.74C3.34 17.47 2.58 16.18 2.02 14.75C1.42 13.24 1.23 11.73 1 10.12C1.03 7.31 2.25 4.87 4.43 2.98Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <input class="main-form__elem" type="tel"  name="Feedback[phone]" id="phone" placeholder="Введите ваш телефон" required=""  autocomplete="off"></input>
                    </div>
                    <div class="main-form__box">
                        <div class="main-form__icon main-form__icon--textarea">
                            <svg width="32.088226" height="32.000000" viewBox="0 0 32.0882 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <desc>
                                    Created with Pixso.
                                </desc>
                                <defs/>
                                <path id="Vector" d="M1 14.32C1 21.64 7.7 27.64 16 27.64C17.67 27.64 19.26 27.38 20.76 26.94C22.44 28.52 24.64 29.94 27.38 31L26.5 23.85C29.32 21.47 31.08 18.02 31.08 14.32C31 6.91 24.2 1 16 1C7.7 1 1 7 1 14.32Z" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round"/>
                                <path id="Vector" d="M12.2 11.14C12.2 7.35 19.08 7.35 19.08 10.97C19.17 13.79 15.82 13.17 15.82 16.61" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                                <path id="Vector" d="M15.82 20.85C15.91 20.85 15.91 20.85 16 20.85" stroke="#000A1A" stroke-opacity="1.000000" stroke-width="2.000000" stroke-linejoin="round" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <textarea class="main-form__elem" rows="6" name="Feedback[body]" required="" placeholder="Ваш вопрос" autocomplete="off"></textarea>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6Lc6vKAqAAAAADrW4scSKDL2TgEa58WR8rGusp1z" style="margin-top: 12px"></div>
                    <button type="submit" class="main-form__button button">Отправить заявку</button>
                </form>
            </div>
            <div class="main-modal__overlay"></div>
        </div>
    </div>
</div>
