<section class=" px-2 sm:px-6 lg:px-5 py-8 w-10/12 m-auto">
    <div class="text-center flex flex-col items-center mb-10">
        <button class="pill-button">Verhoog Je Sales Met 25%</button>
        <h2 class=" text-[40px]">Krachtig e<span class="text-[#999999]">n effectief</span></h2>
    </div>

    @php
        $cards = [
            [
                'eyebrow' => 'Verhoog Je Sales Met 25%',
                'title' => 'Krachtig en effectief',
                'lines' => [
                    'Een helder overzicht van al je klanten',
                    'Volg snel al je verkoopkansen op',
                    'Inzicht van alle notities van collega\'s',
                    'Alle leads, facturen, offertes en projecten gekoppeld',
                    'Plan afspraken in je agenda',
                    'Alle documenten gekoppeld aan jouw klant',
                    'Snel, eenvoudig en veilig',
                ],
            ],
            [
                'eyebrow' => 'Accelereer Met Onze Modules!',
                'title' => 'CRM het hart van Sparkle',
                'lines' => [
                    'Alle noodzakelijke tools zijn aanwezig en geintegreerd zoals sales, leads en project management.',
                    'Je ziet direct op klant niveau alle informatie.',
                    'Vanuit het CRM sturen wij je direct door naar de juiste tool waar gehandeld moet worden.',
                    'Opties krijgen onafhankelijk rechten om gebruikers alleen toegang te geven tot daar waar nodig.',
                ],
            ],
            [
                'eyebrow' => 'Het Hart Van Je Funnel!',
                'title' => 'Sales management',
                'lines' => [
                    'Alle lopende leads staan duidelijk in één overzicht',
                    'Inzicht en tracking met dashboarding',
                    'Leadgegevens, contactpersonen en documenten bij elkaar in de drive',
                    'Leads in bulk importeren of exporteren',
                    'Filteren op bron, categorie, status of actie mogelijk',
                    'Personen aan een lead toevoegen – opvolging',
                    'Voeg afspraken gemakkelijk toe in de agenda',
                ],
            ],
            [
                'eyebrow' => 'Verhoog Je Efficiëntie',
                'title' => 'Project management',
                'lines' => [
                    'Urenregistratie voor dummy’s',
                    'Alle lopende projecten staan duidelijk in één overzicht',
                    'Projectgegevens en documenten bij elkaar in de drive',
                    'Inzicht met reporting',
                    'Wijs taken aan per persoon of in groepsverband',
                    'Overzicht in budget versus gepland versus werkelijkheid',
                    'Voeg taken toe in de agenda',
                ],
            ],
            [
                'eyebrow' => 'Verhoog Je Efficiëntie',
                'title' => 'HR management',
                'lines' => [
                    'Alle lopende sollicitaties staan duidelijk in één overzicht',
                    'Contactpersonen en documenten bij elkaar in de drive',
                    'Filteren op bron, categorie, status of actie mogelijk',
                    'Status van sollicitatie monitoren – opvolging',
                    'Voeg afspraken gemakkelijk toe in de agenda',
                ],
            ],
        ];
    @endphp

    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3 justify-items-center">
        @foreach ($cards as $index => $card)
            <article class="crm-card">
                <div class="crm-card__media">
                    <img src="{{ asset('img.png') }}" alt="Sparkle CRM module" loading="lazy">
                </div>
                <div class="crm-card__body">
                    <button class="crm-cards__pill crm-cards__pill--small mb-1 w-8/12 pill-button">
                        <span>{{ $card['eyebrow'] }}</span>
                    </button>
                    <h3 class="crm-card__title syne mt-1">{{ $card['title'] }}</h3>
                    <ul class="crm-card__list montserrat">
                        @foreach ($card['lines'] as $line)
                            <li>{{ $line }}</li>
                        @endforeach
                    </ul>
                </div>
            </article>
        @endforeach
    </div>
</section>
