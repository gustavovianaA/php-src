<?php

/** @generate-class-entries */

/**
 * @strict-properties
 * @not-serializable
 */
final class OpenSSLCertificate
{
}

/**
 * @strict-properties
 * @not-serializable
 */
final class OpenSSLCertificateSigningRequest
{
}

/**
 * @strict-properties
 * @not-serializable
 */
final class OpenSSLAsymmetricKey
{
}

function openssl_x509_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, bool $no_text = true): bool {}

/** @param string $output */
function openssl_x509_export(OpenSSLCertificate|string $certificate, &$output, bool $no_text = true): bool {}

function openssl_x509_fingerprint(OpenSSLCertificate|string $certificate, string $digest_algo = "sha1", bool $binary = false): string|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_x509_check_private_key(OpenSSLCertificate|string $certificate, #[\SensitiveParameter] $private_key): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_x509_verify(OpenSSLCertificate|string $certificate, $public_key): int {}

/**
 * @return array<string, int|string|array>|false
 * @refcount 1
 */
function openssl_x509_parse(OpenSSLCertificate|string $certificate, bool $short_names = true): array|false {}

function openssl_x509_checkpurpose(OpenSSLCertificate|string $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = null): bool|int {}

function openssl_x509_read(OpenSSLCertificate|string $certificate): OpenSSLCertificate|false {}

/** @deprecated */
function openssl_x509_free(OpenSSLCertificate $certificate): void {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkcs12_export_to_file(OpenSSLCertificate|string $certificate, string $output_filename, #[\SensitiveParameter] $private_key, #[\SensitiveParameter] string $passphrase, array $options = []): bool {}

/**
 * @param string $output
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkcs12_export(OpenSSLCertificate|string $certificate, &$output, #[\SensitiveParameter] $private_key, #[\SensitiveParameter] string $passphrase, array $options = []): bool {}

/**
 * @param array $certificates
 */
function openssl_pkcs12_read(string $pkcs12, &$certificates, #[\SensitiveParameter] string $passphrase): bool {}

function openssl_csr_export_to_file(OpenSSLCertificateSigningRequest|string $csr, string $output_filename, bool $no_text = true): bool {}

/** @param string $output */
function openssl_csr_export(OpenSSLCertificateSigningRequest|string $csr, &$output, bool $no_text = true): bool {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_csr_sign(OpenSSLCertificateSigningRequest|string $csr, OpenSSLCertificate|string|null $ca_certificate, #[\SensitiveParameter] $private_key, int $days, ?array $options = null, int $serial = 0): OpenSSLCertificate|false {}

/**
 * @param OpenSSLAsymmetricKey $private_key
 */
function openssl_csr_new(array $distinguished_names, #[\SensitiveParameter] &$private_key, ?array $options = null, ?array $extra_attributes = null): OpenSSLCertificateSigningRequest|false {}

/**
 * @return array<string, string|array>|false
 * @refcount 1
 */
function openssl_csr_get_subject(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): array|false {}

function openssl_csr_get_public_key(OpenSSLCertificateSigningRequest|string $csr, bool $short_names = true): OpenSSLAsymmetricKey|false {}

function openssl_pkey_new(?array $options = null): OpenSSLAsymmetricKey|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key
 */
function openssl_pkey_export_to_file(#[\SensitiveParameter] $key, string $output_filename, #[\SensitiveParameter] ?string $passphrase = null, ?array $options = null): bool {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $key
 * @param string $output
 */
function openssl_pkey_export(#[\SensitiveParameter] $key, &$output, #[\SensitiveParameter] ?string $passphrase = null, ?array $options = null): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_pkey_get_public($public_key): OpenSSLAsymmetricKey|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 * @alias openssl_pkey_get_public
 */
function openssl_get_publickey($public_key): OpenSSLAsymmetricKey|false {}

/**
 * @deprecated
 */
function openssl_pkey_free(OpenSSLAsymmetricKey $key): void {}

/**
 * @alias openssl_pkey_free
 * @deprecated
 */
function openssl_free_key(OpenSSLAsymmetricKey $key): void {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkey_get_private(#[\SensitiveParameter] $private_key, #[\SensitiveParameter] ?string $passphrase = null): OpenSSLAsymmetricKey|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 * @alias openssl_pkey_get_private
 */
function openssl_get_privatekey(#[\SensitiveParameter] $private_key, #[\SensitiveParameter] ?string $passphrase = null): OpenSSLAsymmetricKey|false {}

/**
 * @return array<string, int|string|array>|false
 * @refcount 1
 */
function openssl_pkey_get_details(OpenSSLAsymmetricKey $key): array|false {}

function openssl_pbkdf2(#[\SensitiveParameter] string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1"): string|false {}

function openssl_pkcs7_verify(string $input_filename, int $flags, ?string $signers_certificates_filename = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $output_filename = null): bool|int {}

/** @param OpenSSLCertificate|array|string $certificate */
function openssl_pkcs7_encrypt(string $input_filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkcs7_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, #[\SensitiveParameter] $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = null): bool {}

/**
 * @param OpenSSLCertificate|string $certificate
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key
 */
function openssl_pkcs7_decrypt(string $input_filename, string $output_filename, #[\SensitiveParameter] $certificate, #[\SensitiveParameter] $private_key = null): bool {}

/** @param array $certificates */
function openssl_pkcs7_read(string $data, &$certificates): bool {}

function openssl_cms_verify(string $input_filename, int $flags = 0, ?string $certificates = null, array $ca_info = [], ?string $untrusted_certificates_filename = null, ?string $content = null, ?string $pk7 = null, ?string $sigfile = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/** @param OpenSSLCertificate|array|string $certificate */
function openssl_cms_encrypt(string $input_filename, string $output_filename, $certificate, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, int $cipher_algo = OPENSSL_CIPHER_AES_128_CBC): bool {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_cms_sign(string $input_filename, string $output_filename, OpenSSLCertificate|string $certificate, #[\SensitiveParameter] $private_key, ?array $headers, int $flags = 0, int $encoding = OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = null): bool {}

/**
 * @param OpenSSLCertificate|string $certificate
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string|null $private_key
 */
function openssl_cms_decrypt(string $input_filename, string $output_filename, #[\SensitiveParameter] $certificate, #[\SensitiveParameter] $private_key = null, int $encoding = OPENSSL_ENCODING_SMIME): bool {}

/** @param array $certificates */
function openssl_cms_read(string $input_filename, &$certificates): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_private_encrypt(#[\SensitiveParameter] string $data, &$encrypted_data, #[\SensitiveParameter] $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $decrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_private_decrypt(string $data, #[\SensitiveParameter] &$decrypted_data, #[\SensitiveParameter] $private_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $encrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
function openssl_public_encrypt(#[\SensitiveParameter] string $data, &$encrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

/**
 * @param string $decrypted_data
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 */
function openssl_public_decrypt(string $data, #[\SensitiveParameter] &$decrypted_data, $public_key, int $padding = OPENSSL_PKCS1_PADDING): bool {}

function openssl_error_string(): string|false {}

/**
 * @param string $signature
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_sign(string $data, &$signature, #[\SensitiveParameter] $private_key, string|int $algorithm = OPENSSL_ALGO_SHA1): bool {}

/** @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key */
function openssl_verify(string $data, string $signature, $public_key, string|int $algorithm = OPENSSL_ALGO_SHA1): int|false {}

/**
 * @param string $sealed_data
 * @param array $encrypted_keys
 * @param string $iv
 */
function openssl_seal(#[\SensitiveParameter] string $data, &$sealed_data, &$encrypted_keys, array $public_key, string $cipher_algo, &$iv = null): int|false {}

/**
 * @param string $output
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_open(string $data, #[\SensitiveParameter] &$output, string $encrypted_key, #[\SensitiveParameter] $private_key, string $cipher_algo, ?string $iv = null): bool {}

/**
 * @return array<int, string>
 * @refcount 1
 */
function openssl_get_md_methods(bool $aliases = false): array {}

/**
 * @return array<int, string>
 * @refcount 1
 */
function openssl_get_cipher_methods(bool $aliases = false): array {}

#ifdef HAVE_EVP_PKEY_EC
/**
 * @return array<int, string>|false
 * @refcount 1
 */
function openssl_get_curve_names(): array|false {}
#endif

function openssl_digest(string $data, string $digest_algo, bool $binary = false): string|false {}

/**
 * @param string $tag
 */
function openssl_encrypt(#[\SensitiveParameter] string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", &$tag = null, string $aad = "", int $tag_length = 16): string|false {}

function openssl_decrypt(string $data, string $cipher_algo, #[\SensitiveParameter] string $passphrase, int $options = 0, string $iv = "", ?string $tag = null, string $aad = ""): string|false {}

function openssl_cipher_iv_length(string $cipher_algo): int|false {}

function openssl_dh_compute_key(string $public_key, #[\SensitiveParameter] OpenSSLAsymmetricKey $private_key): string|false {}

/**
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $public_key
 * @param OpenSSLAsymmetricKey|OpenSSLCertificate|array|string $private_key
 */
function openssl_pkey_derive($public_key, #[\SensitiveParameter] $private_key, int $key_length = 0): string|false {}

/** @param bool $strong_result */
function openssl_random_pseudo_bytes(int $length, &$strong_result = null): string {}

function openssl_spki_new(#[\SensitiveParameter] OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = OPENSSL_ALGO_MD5): string|false {}

function openssl_spki_verify(string $spki): bool {}

function openssl_spki_export(string $spki): string|false {}

function openssl_spki_export_challenge(string $spki): string|false {}

/**
 * @return array<string, string>
 * @refcount 1
 */
function openssl_get_cert_locations(): array {}
