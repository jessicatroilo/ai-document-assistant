
# 🧠 Assistant de synthèse IA

Application web permettant de transformer un texte brut (email, document, compte rendu…) en synthèse structurée :
- résumé (max 5 lignes)
- points importants
- actions à suivre

---

## 🎯 Objectif

Cet outil a été conçu pour illustrer l’intégration d’une API d’intelligence artificielle dans une application Symfony.

Il permet de simplifier la lecture de contenus longs et de transformer l’information en éléments exploitables rapidement.

---

## 🖥️ Fonctionnement

1. L’utilisateur colle un texte dans la zone prévue
2. Le texte est envoyé à une API IA (OpenAI)
3. L’IA retourne une synthèse structurée
4. L’interface affiche :
   - résumé
   - points clés
   - actions
  

![Aperçu de l’interface de l’assistant IA](./screenshots/interface.png)

![Aperçu de l’interface de l’assistant IA](./screenshots/add-document.png)

![Aperçu de l’interface de l’assistant IA](./screenshots/result.png)


---

## ⚙️ Mode API / Mode mock

Le projet peut fonctionner en deux modes :

- **Mode API (réel)** → utilise OpenAI 
- **Mode mock (désactivé)** → données simulées pour démonstration

👉 activation dans le controller :

```php
$useApi = true; // ou false
```

👉ajout de la clé API dans le .env :
```env
OPENAI_API_KEY= "sk-maclesupertopsecret"
```
