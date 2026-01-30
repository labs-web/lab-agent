# Script d'installation automatique de l'Agent Global Antigravity
# Ce script copie les fichiers de configuration vers le dossier global de l'utilisateur.

$ErrorActionPreference = "Stop"

# Définition des chemins relatifs aux nouveaux dossiers
$GlobalSkillsSrc = Join-Path $PSScriptRoot "skills"
$RulesSrc = Join-Path $PSScriptRoot "rules"
$WorkflowsSrc = Join-Path $PSScriptRoot "workflows"

$UserHome = [System.Environment]::GetFolderPath('UserProfile')
$GeminiRoot = Join-Path $UserHome ".gemini"
$GlobalSkillsRoot = Join-Path $GeminiRoot "antigravity\global_skills"

# 1. Installation des Règles Globales (GEMINI.md)
Write-Host "--- Installation des Règles Globales ---" -ForegroundColor Cyan
if (-not (Test-Path $GeminiRoot)) {
    New-Item -ItemType Directory -Path $GeminiRoot -Force | Out-Null
    Write-Host "Création du dossier $GeminiRoot" -ForegroundColor Gray
}

$SourceRules = Join-Path $RulesSrc "GEMINI.md"
$DestRules = Join-Path $GeminiRoot "GEMINI.md"

Copy-Item -Path $SourceRules -Destination $DestRules -Force
Write-Host "OK : GEMINI.md copié vers $DestRules" -ForegroundColor Green

# 2. Installation des Skills Globaux (architecte-agent)
Write-Host "`n--- Installation des Skills Globaux ---" -ForegroundColor Cyan
if (-not (Test-Path $GlobalSkillsRoot)) {
    New-Item -ItemType Directory -Path $GlobalSkillsRoot -Force | Out-Null
    Write-Host "Création du dossier $GlobalSkillsRoot" -ForegroundColor Gray
}

$SourceSkill = Join-Path $GlobalSkillsSrc "architecte-agent"
$DestSkill = Join-Path $GlobalSkillsRoot "architecte-agent"

if (Test-Path $SourceSkill) {
    if (Test-Path $DestSkill) {
        Remove-Item -Path $DestSkill -Recurse -Force
        Write-Host "Nettoyage de l'ancienne version du skill" -ForegroundColor Gray
    }
    Copy-Item -Path $SourceSkill -Destination $GlobalSkillsRoot -Recurse -Force
    Write-Host "OK : Skill 'architecte-agent' installé dans $DestSkill" -ForegroundColor Green
} else {
    Write-Warning "Le dossier 'architecte-agent' est introuvable !"
}

# 3. Instructions pour les Workflows
Write-Host "`n--- Installation des Workflows (Action Manuelle Requise) ---" -ForegroundColor Yellow
Write-Host "Antigravity ne permet pas encore la copie directe des fichiers de workflow globaux."
Write-Host "Veuillez créer ces workflows via l'interface agent :"

Get-ChildItem $WorkflowsSrc -Filter "*.md" | ForEach-Object {
    Write-Host "- Créez le Workflow Global '$($_.BaseName)' avec le contenu de : $($_.FullName)"
}

Write-Host "`nInstallation terminée !" -ForegroundColor Green
