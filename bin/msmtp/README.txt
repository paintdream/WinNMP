msmtp is an SMTP client.

In the default mode, it transmits a mail to an SMTP server (for example at a 
free mail provider) which does the delivery. 
To use this program with your mail user agent (MUA), create a configuration 
file with your mail account(s) and tell your MUA to call msmtp instead of 
/usr/sbin/sendmail.

Features include:
- Sendmail compatible interface (command line options and exit codes).
- PIPELINING support for increased transmission speed.
- DSN (Delivery Status Notification) support.
- RMQS (Remote Message Queue Starting) support (ETRN keyword).
- IPv6 support.
- LMTP support.
- Authentication methods PLAIN, LOGIN, and CRAM-MD5.
- Support for multiple accounts.

Optional features, depending on external libraries:
- TLS/SSL support, including client certificates (requires GnuTLS or OpenSSL).
- Additional authentication methods EXTERNAL, GSSAPI, SCRAM-SHA-1, DIGEST-MD5,
  NTLM (requires GNU Libgsasl).
- Support for Internationalized Domain Names (IDN) (requires GNU Libidn).
- Native language support (NLS) (may require GNU libintl).

The homepage of this program is <http://msmtp.sourceforge.net/>.

This program is free software; you can redistribute it and/or modify it under 
the terms of the GNU General Public License (see the file COPYING) as published
by the Free Software Foundation; either version 3 of the License, or (at your 
option) any later version.
