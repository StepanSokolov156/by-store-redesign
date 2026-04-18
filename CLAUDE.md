# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Local OSPanel 6 development environment for a Belarusian electronics e-commerce site (**by-store.by**). Three directories:

- **by-store.local/** — MODX Revolution CMS site (production copy, configured for local dev)
- **by-store-verstka/** — Static HTML/CSS/JS frontend mockups (new design to integrate)
- **phpmyadmin/** — phpMyAdmin 5.2.3 (do not modify)

> **See `by-store.local/CLAUDE.md` for detailed architecture, commands, and workflow rules.** This file covers only cross-project context.

## Task Context

Integrating the new design from `by-store-verstka/` into the existing MODX + miniShop2 site at `by-store.local/`. Main page and catalog page integration are complete; breadcrumbs added to all inner templates. Next pages TBD (category, product, trade-in).

## Quick Reference

- **Stack:** OSPanel 6 (Windows) — Apache + PHP 8.0 + MySQL-8.0
- **Domain:** `by-store.local`
- **Database:** `modx_local`, user `root`, no password, host `MySQL-8.0`, table prefix `Modx-BYStore`
- **MySQL CLI:** `/c/OSPanel/modules/MySQL-8.0/bin/mysql.exe -u root -h "MySQL-8.0"`
- **Cache clear:** `rm -rf core/cache/* core/cache_/*`
- **Deploy guide:** see `by-store.local/DEPLOY.md`
