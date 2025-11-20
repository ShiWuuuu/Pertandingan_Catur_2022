🏆 Pertandingan Catur – Chess Tournament Management System (PHP) [2022 Project]
A web-based system for managing chess competitions with two user roles: Peserta (Participant) and Hakim (Judge). The system allows participants to view their results, while judges can manage participants, update scores, and track school-based performance.

✨ Features
👤 Peserta (Participant)
1. Login to view personal match results.
2. Check school-level performance summary.
3. Read-only access (no editing).
⚖️ Hakim (Judge/Admin)
1. Access to a full administration panel with the following menu items:

Menu Hakim
+ Senarai Peserta
+ Upload Data Peserta Baru
+ Senarai Hakim
+ Penilaian Peserta
+ Keputusan Individu
+ Keputusan Sekolah

Hakim can:
+ Add new participants
+ Edit/update participant scores
+ Manage judge lists
+ Evaluate participant performance
+ View individual results
+ View school ranking and score summaries

🏫 School vs School Results
Automatically calculates total points by school
Displays ranking for inter-school competition standings

🕹️ User Flow
index.php
Shows leaderboard and school results
Peserta login → View results only
Hakim login → Redirects to Menu Hakim dashboard

🛠️ Tech Stack
PHP (Core logic)
MySQL (Participant, score, and school data)
HTML/CSS/JS (Frontend interface)

🚀 Setup
Clone repository
Import provided SQL file into MySQL (Buggy, required manually import for each table)
Configure connection.php for database connection
Run the system via local server (XAMPP/WAMP)
