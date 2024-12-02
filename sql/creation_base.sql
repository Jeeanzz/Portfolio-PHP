CREATE DATABASE IF NOT EXISTS `Cyberfolio`;
USE `Cyberfolio`;

DROP TABLE projects;
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    challenges TEXT,
    solutions TEXT,
    results TEXT,
    image_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO projects (name, description, challenges, solutions, results, image_path)
VALUES
("Pipeline CI/CD Sécurisé",
"Création d’un pipeline CI/CD intégrant des outils de sécurité comme SAST et DAST. Ce projet a été déployé sur AWS avec Docker et Kubernetes, visant à automatiser les tests de sécurité dans le cycle de développement continu. L'objectif était de garantir que le code déployé en production respecte des standards de sécurité avant d'être mis en ligne.",
"Le défi principal était d'intégrer des outils de sécurité dans un pipeline CI/CD sans perturber les cycles de développement rapides et d'assurer une couverture de sécurité maximale.",
"SonarQube, OWASP ZAP, Docker, Kubernetes ont été utilisés pour automatiser les tests de sécurité, analyser le code source pour détecter les vulnérabilités et automatiser les mises à jour de sécurité dans le processus CI/CD.",
"Les résultats ont permis de réduire les vulnérabilités de 40% et d'accélérer les déploiements de 25% en garantissant une sécurité accrue à chaque étape.",
"images/1.jpg"),

("Sécurisation des API REST et GraphQL",
"Mise en place de standards OWASP pour protéger les API REST et GraphQL d’une application utilisée par des milliers de clients. Ce projet a impliqué la mise en œuvre de techniques de protection contre les attaques par injection, l'authentification des utilisateurs et la gestion sécurisée des données sensibles.",
"Le principal défi était de garantir que les API restaient performantes tout en mettant en œuvre des mesures de sécurité robustes, telles que la prévention des attaques par injection et la gestion des clés API.",
"Les solutions mises en œuvre incluent l'authentification JWT, la mise en place de rate limiting, la validation des entrées et la gestion des erreurs API.",
"Le résultat a été une réduction de 70% des attaques sur les API grâce à une meilleure gestion des risques et à des politiques de sécurité renforcées.",
"images/2.jpg"),

("Audit de Sécurité d'Infrastructure Cloud",
"Audit complet d’une infrastructure Cloud afin d’identifier et de corriger les vulnérabilités. Le but était d’évaluer la sécurité de l’infrastructure et de la rendre conforme aux normes de sécurité internationales, tout en protégeant les données sensibles contre les cybermenaces.",
"Le défi majeur était d’identifier toutes les failles potentielles dans un environnement cloud complexe tout en respectant les normes de sécurité ISO 27001.",
"Pour réaliser cet audit, des tests de pénétration ont été effectués, des pare-feu ont été configurés et des formations sur la sécurité ont été dispensées aux équipes techniques.",
"Les résultats ont permis d'améliorer la conformité de l’entreprise avec les normes ISO 27001 et de renforcer la sécurité globale de l'infrastructure.",
"images/3.jpg"),

("Migration d'Infrastructure On-Premise vers le Cloud (AWS)",
"Migration sécurisée d’une infrastructure on-premise vers AWS, avec une attention particulière portée sur la protection des données sensibles et la gestion des coûts de transition. L’objectif était d’assurer une transition sans perte de service tout en minimisant les coûts d’infrastructure.",
"Le défi consistait à garantir que la migration ne perturberait pas les services en production tout en mettant en place des mesures de sécurité avancées pour protéger les données sensibles pendant le processus.",
"Des configurations de VPC, IAM (Identity and Access Management), et des mécanismes de cryptage des données ont été utilisés pour sécuriser l’environnement Cloud après la migration.",
"La migration a permis de réduire les coûts d'infrastructure de 30 % et d’offrir une plus grande flexibilité et scalabilité pour l’entreprise.",
"images/4.jpg"),

("Automatisation des Tâches IT Répétitives",
"Mise en place de scripts d’automatisation pour les tâches IT répétitives telles que les sauvegardes de données, le déploiement de mises à jour et la gestion des accès utilisateurs. Ce projet visait à réduire la charge de travail manuelle des équipes et à améliorer l’efficacité générale des processus.",
"Le principal défi était de garantir que l’automatisation ne provoque pas d’erreurs et qu’elle soit facile à maintenir et à adapter à mesure que les besoins évoluent.",
"Les tâches ont été automatisées grâce à des scripts Bash, Python, et des outils d’orchestration comme Ansible pour la gestion de la configuration.",
"Les résultats ont permis d’augmenter la productivité des équipes de 50% en réduisant les erreurs humaines et en libérant du temps pour des tâches à plus forte valeur ajoutée.",
"images/5.jpg");
