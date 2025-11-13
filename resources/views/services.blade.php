@extends('base')

@section('title', 'Services - Front-End Developer - Stefan Lancelot')

@section('head')
    @vite(['resources/css/main.css', 'resources/js/main.js'])
@endsection
@section('content')
    <x-layouts.guest>
        <div
            class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] h-[85%] min-h-[700px] bg-dark border border-stroke">
            <div
                class="absolute top-0 left-0 w-full h-full py-2 overflow-auto no-scrollbar bg-dark transition-all duration-500">
                <table class="w-full normal-case">
                    <thead>
                        <tr class="border-b border-stroke">
                            <th class="text-left font-light w-1/4 p-2">Web Development / DevOps</th>
                            <th class="text-left font-light w-2/4 p-2">Description</th>
                            <th class="text-right font-light w-1/4 p-2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- --- WEB DEVELOPMENT --- -->
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Création de site vitrine</td>
                            <td class="p-2">Développement complet d’un site vitrine responsive avec CMS ou sur mesure.
                            </td>
                            <td class="p-2 text-right">à partir de 800 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Développement e-commerce</td>
                            <td class="p-2">Mise en place d’une boutique en ligne (Shopify, WooCommerce, Prestashop,
                                etc.).</td>
                            <td class="p-2 text-right">à partir de 1200 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Intégration front-end</td>
                            <td class="p-2">Intégration HTML, CSS, JS ou framework (React, Vue, Next.js, etc.).</td>
                            <td class="p-2 text-right">400 € / page</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Développement back-end</td>
                            <td class="p-2">Création d’API, logique serveur, base de données (Node.js, Laravel,
                                Django...).</td>
                            <td class="p-2 text-right">à partir de 600 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Refonte de site</td>
                            <td class="p-2">Modernisation du design, amélioration des performances et du SEO.</td>
                            <td class="p-2 text-right">à partir de 700 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Optimisation SEO</td>
                            <td class="p-2">Amélioration du référencement naturel, structure, balises et vitesse.</td>
                            <td class="p-2 text-right">300 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Maintenance et support</td>
                            <td class="p-2">Mises à jour, corrections de bugs, sauvegardes et monitoring.</td>
                            <td class="p-2 text-right">100 € / mois</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Ajout de nouvelles fonctionnalités</td>
                            <td class="p-2">Développement de modules ou fonctionnalités personnalisées.</td>
                            <td class="p-2 text-right">sur devis</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Changement de nom de domaine</td>
                            <td class="p-2">Migration du domaine, mise à jour DNS et redirections 301.</td>
                            <td class="p-2 text-right">80 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Migration de site</td>
                            <td class="p-2">Transfert complet de site (hébergeur, CMS ou base de données).</td>
                            <td class="p-2 text-right">150 €</td>
                        </tr>

                        <!-- --- DEVOPS --- -->
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Configuration serveur</td>
                            <td class="p-2">Installation et configuration d’un serveur (Nginx, Apache, Node, etc.).</td>
                            <td class="p-2 text-right">120 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Déploiement automatisé (CI/CD)</td>
                            <td class="p-2">Mise en place de pipelines GitHub Actions, GitLab CI, ou Jenkins.</td>
                            <td class="p-2 text-right">250 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Dockerisation d’application</td>
                            <td class="p-2">Création et optimisation de conteneurs Docker pour le déploiement.</td>
                            <td class="p-2 text-right">200 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Surveillance & Monitoring</td>
                            <td class="p-2">Configuration d’outils de monitoring (Prometheus, Grafana, UptimeRobot...).
                            </td>
                            <td class="p-2 text-right">150 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Sauvegardes & restauration</td>
                            <td class="p-2">Mise en place de sauvegardes automatiques et restauration de données.</td>
                            <td class="p-2 text-right">100 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Sécurisation serveur</td>
                            <td class="p-2">Configuration de pare-feu, SSL, authentification et durcissement système.
                            </td>
                            <td class="p-2 text-right">180 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Mise en place CDN</td>
                            <td class="p-2">Configuration d’un CDN (Cloudflare, AWS CloudFront...) pour accélérer le
                                site.</td>
                            <td class="p-2 text-right">90 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Mise en production</td>
                            <td class="p-2">Déploiement et configuration finale sur serveur de production.</td>
                            <td class="p-2 text-right">150 €</td>
                        </tr>
                        <tr
                            class="border-b border-stroke font-light opacity-30 hover:opacity-100 transition-opacity duration-300 select-none">
                            <td class="p-2">Audit technique complet</td>
                            <td class="p-2">Analyse des performances, sécurité, structure et bonnes pratiques DevOps.
                            </td>
                            <td class="p-2 text-right">250 €</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </x-layouts.guest>
@endsection
