# Security Guidelines

## Environment Variables & Credentials

### ⚠️ CRITICAL SECURITY NOTICE

**NEVER commit the `.env` file with real credentials to version control!**

### 🔒 Protected Files

The following files are protected by `.gitignore` and should NEVER be committed:

- `.env` (contains real credentials)
- `.env.local`
- `.env.prod`
- `.env.production`
- Any file ending with `.env.*`

### 📋 Setup Instructions

1. **Copy the example file:**
   ```bash
   cp .env.example .env
   ```

2. **Fill in real credentials in `.env`:**
   - `APP_SECRET`: Generate a random 32-character string
   - `DATABASE_URL`: Your real database connection
   - `TWILIO_ACCOUNT_SID`: From Twilio Console (starts with `AC`)
   - `TWILIO_AUTH_TOKEN`: From Twilio Console (32-character string)
   - `TWILIO_PHONE_NUMBER`: Your Twilio phone number or Messaging Service SID

### 🚨 What to do if credentials are accidentally committed:

1. **Immediately rotate all compromised credentials:**
   - Generate new Twilio Auth Token
   - Change database passwords
   - Generate new APP_SECRET

2. **Remove from git history:**
   ```bash
   git filter-branch --force --index-filter 'git rm --cached --ignore-unmatch .env' --prune-empty --tag-name-filter cat -- --all
   ```

3. **Force push (if safe to do so):**
   ```bash
   git push --force-with-lease --all
   ```

### 🔐 Production Deployment

For production environments:
- Use environment variables directly (don't use `.env` files)
- Use secure secret management (AWS Secrets Manager, Azure Key Vault, etc.)
- Enable MFA on all service accounts
- Regularly rotate credentials

### 📞 Twilio Security

- Enable webhook signature validation
- Use Messaging Service SIDs instead of phone numbers when possible
- Monitor usage for unexpected spikes
- Set spending limits in Twilio Console
