# New computer setup
- Download this repo and unzip to your home folder
- `cd ~/formation && ./slay`

---

# After slay has run complete the following

## Enable fzf
- `$(brew --prefix)/opt/fzf/install`

## System Prefs
- Mouse
    - Enable secondary click
    - Set tracking speed to 6 of 10
- Keyboard
    - Shortcuts > Spotlight: Disable "Show Spotlight search"
- Accessibility
    - Display
        - Reduce transparency
- Siri
    - Disable Siri
- Internet Accounts
    - Enable relevant services, iCloud keychain should bring them over

## 1Password
- Add Good Work 1Password.com account
- In Preferences > Advanced > Enable "Allow creation of vaults outside 1Password accounts"
- Under Sync, change Primary to iCloud
- Enable Spotlight and 3rd party app integrations in Preferences > Advanced

## Finder Preferences
- New Finder windows show: home folder
- Sidebar
    - Remove: Recents, CDs/DVDs, Tags etc
    - Add home
- In finders actual sidebar, drag in "Sites", order alphabetically but with home at the top

## SSH
- Manually export the 2 key files from 1Password to the desktop
```
cd ~
mkdir .ssh
mv ~/Desktop/id_rsa* ~/.ssh/.
cd .ssh
chmod 600 id_rsa
chmod 644 id_rsa.pub
# Remove ssh key passphrase
ssh-keygen -p
```

## Fonts
- Install Dank Mono from Dropbox/Sync

## Chrome
- Open Chrome and sign in to chrisrowenet
- Wait a few minutes for it to sync all settings and extensions etc.

## Messages
- Check signed in and enable Messages in iCloud

## Mail
- Show most recent messages at the top of conversations
- Move discarded messages into: Archive

## Contacts
- Sort by first name
