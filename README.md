# KPFK.org Frontend HTML Snapshots

This repository contains saved HTML snapshots of the KPFK.org frontend as of July 2025. These snapshots are intended to serve as a reference for redevelopment, Codex training, structure analysis, and design planning.

---

## 💡 Purpose

- To document actual HTML output from Aiir CMS (the "backend of the frontend").
- To illustrate differences between raw pages and pages with custom injections (e.g., new nav, audio players).
- To provide real examples of every page type and template in use.

---

## 🗺️ Navigation Structure & File Mapping

The main site navigation and its related files are documented below. This helps clarify which files map directly to nav and which do not.

### ✅ Primary Buttons

| UI Label   | URL            | Filename              | Notes                                      |
|-------------|----------------|-----------------------|--------------------------------------------|
| Listen Live | `/player`    | `player.html`      | Standalone player page linked via header button. |
| Donate      | `/support/` → `/donate` → external | `support.html` | Main support page, includes Donate; ultimately redirects to Allyra fundraising platform. |

---

### ✅ Schedule

| Submenu         | URL             | Filename            | Notes              |
|-----------------|-----------------|---------------------|--------------------|
| Daily Schedule  | `/schedule/`  | `schedule.html`  | Standard schedule view. |
| Schedule Grid   | `/schedule/grid/` | `schedule-grid.html` | Grid layout.       |
| Events Calendar | `/calendar/` | `events.html`    | Nav link labeled "Events Calendar" redirects here. |

---

### ✅ Shows

| Submenu            | URL               | Filename                          | Notes                                          |
|--------------------|-------------------|-----------------------------------|------------------------------------------------|
| Shows A–Z         | `/on-air/`    | `on-air.html`                | Master listing.                |
| Podcasts          | `/podcasts/` | `podcasts.html`           | Podcast landing.                   |
| Archives         | `/archives/` | `archives.html`          | Main archive page.        |

---

### ⚠️ Important clarification

Only **top-level sections** (e.g., Shows A–Z, Podcasts, Archives) appear in the main site navigation.  

**Individual show pages and podcast pages** (like Democracy Now, Informativo Pacifica, Move the Crowd) are *not* part of the primary nav but are accessible via the Shows or Podcasts sections.  

They are included here as structural and design references to illustrate different template types, custom player integrations, and content strategies.

---

### ✅ Individual Show & Podcast Pages (Examples)

| URL                                | Filename                          | Notes                                     |
|------------------------------------|-----------------------------------|-------------------------------------------|
| `/on-air/democracy-now1/`        | `on-air-democracy-now1.html` | Example RSS-based show page. |
| `/podcasts/solartopia/`          | `podcasts-solartopia.html` | Example RSS-based podcast page. |
| `/on-air/move-the-crowd/`      | `on-air-move-the-crowd.html` | Old show page with iframe player. |
| `/on-air/informativo-pacifica/` | `on-air-informativo-pacifica.html` | New show template with HTML5 audio. |
| `/on-air/informativo-pacifica/email/` | `on-air-informativo-pacifica-email.html` | Auto-generated show contact page. |

---

### ✅ Support & Info

| Submenu            | URL                         | Filename                     | Notes                         |
|--------------------|-----------------------------|------------------------------|-------------------------------|
| Main Support Page  | `/support/`             | `support.html`         | Includes Donate. |
| Sustainers Circle  | `/support/sustainer1/` | `support-sustainer1.html` | —                             |
| Volunteer          | `/support/volunteer/` | `support-volunteer.html` | —                             |
| Station Boards     | `/support/board/`     | `support-board.html`    | —                             |
| About KPFK         | `/about`               | `about.html`          | —                             |

---

### ✅ Archives

| Label       | URL            | Filename                  | Notes                                           |
|-------------|----------------|---------------------------|-------------------------------------------------|
| Archives    | `/archives/` | `archives.html`        | Main archive page.            |
| External Archive Site | `http://archive.kpfk.org/` | `archive-kpfk-org.html` | Full snapshot of legacy external archive structure. |

---

### ✅ Other

| Label        | URL                | Filename              | Notes                    |
|-------------|--------------------|-----------------------|--------------------------|
| Search      | `/searchresults/` | `searchresults.html` | Example search layout. |

---

## 🗂️ Additional Aiir System Pages (Not in Main Nav)

These pages exist within Aiir but are **not directly linked in the main header navigation**. They are usually accessed via footers, modules, or auto-generated links.

| URL         | Suggested Filename  | Notes                                |
|-------------|---------------------|--------------------------------------|
| `/directory` | `directory.html` | Host or show directory. |
| `/photos`    | `photos.html`    | Gallery or event photos. |
| `/played`    | `played.html`    | Recently played items. |
| `/blogs`     | `blogs.html`     | Blog archive or index. |

---

## ⚡ Homepage Files

- `homepage-with-injection.html` — Homepage including global head/body injections (new nav enhancements, smooth scroll behavior, etc.). Represents live source of truth.
- `homepage-clean-no-injection.html` — Baseline Aiir-rendered homepage with default nav (no custom injections). Useful for comparing structural changes.
- `global-injection-snippet.html` — Standalone HTML snippet containing the global injection code (new nav markup, smooth scroll script, and any additional logic included sitewide).

---

## 🏗️ Aiir CMS Context

- Aiir acts as the "backend of the frontend" for KPFK.org.  
- Pages are assembled via block-based editors (especially homepage blocks: "Primary Content" and "Secondary Content").
- Global injections allow HTML, CSS, and JS code to be included in the `<head>` or bottom of `<body>`.
- Pages can include metadata: search keywords, meta title, summary text, and default social share images (420×236 for Facebook/X).
- Templates include basic pages, "Pages Wide" (no sidebar), microsites, and specialized show layouts.
- Content can optionally be locked behind member login ("club" feature).

---

## 🎯 Why these files exist

- Serve as real references for future frontend rebuilds or design system planning.
- Train or guide Codex to understand existing structures and assist in safe code generation.
- Document legacy iframe-based players versus new HTML5 player implementations.
- Show practical differences between raw CMS output and live site enhancements.

---

## 💬 Usage

Use these snapshots to:
- Analyze site architecture and markup.
- Plan component refactors (nav, players, content blocks).
- Evaluate integration points with Confessor JSON APIs and other backend data sources.
- Feed Codex or other AI tools accurate page context for targeted improvements.

---

## ✅ Questions or contributions

For clarifications or contributions, contact [aestwick](https://github.com/aestwick).

---
